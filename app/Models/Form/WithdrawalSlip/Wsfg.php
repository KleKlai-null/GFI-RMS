<?php

namespace App\Models\Form\WithdrawalSlip;

use App\Events\PDF\FG;
use App\Models\Form\Item\FgItem;
use App\Models\User;
use App\Services\DocumentService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Wsfg extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [
        'id', 'created_at', 'updated_at'
    ];

    protected $dispatchesEvents = [
        'created'   => FG::class
    ];

    protected static function boot()
    {
        parent::boot();

        Wsfg::creating(function($model) {
            $model->document_series_no = DocumentService::GenerateSeriesNo('GFI', 'FG');
            $model->user_id = auth()->user()->id;
            $model->user_name = auth()->user()->name;
        });
    }

    public function items()
    {
        return $this->hasMany(FgItem::class);
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Query Scope
     */
    public function scopeDocumentSeries($query, $series_no)
    {
        return $query->where('document_series_no', $series_no);
    }

    public function scopeGetData($query)
    {
        if(auth()->user()->hasRole('administrator')) {
            return $query->with('items')->orderBy('id', 'desc');
        } else {
            return $query->with('items')->where('user_id', auth()->user()->id)->orderBy('id', 'desc');
        }
    }

    public function scopeSearch($query, $column, $search)
    {
        if(DB::connection()->getDriverName() == 'pgsql'){
            return $query->where($column, 'ilike', '%'.$search.'%');
        } else {
            return $query->where($column, 'like', '%'.$search.'%');
        }
    }
}
