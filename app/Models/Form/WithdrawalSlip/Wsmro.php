<?php

namespace App\Models\Form\WithdrawalSlip;

use App\Events\PDF\MRO;
use App\Models\Form\Item\MroItem;
use App\Models\User;
use App\Services\DocumentService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Wsmro extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [
        'id', 'created_at', 'updated_at'
    ];

    protected $observables = ['updateStatistic'];

    protected $dispatchesEvents = [
        'created'   => MRO::class
    ];

    protected static function boot()
    {
        parent::boot();

        Wsmro::creating(function($model) {
            $model->document_series_no = DocumentService::GenerateSeriesNo('GFI', 'MRO');
            $model->user_id = auth()->user()->id;
            $model->user_name = auth()->user()->username;
        });
    }

    public function items()
    {
        return $this->hasMany(MroItem::class);
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

    /**
     * Set @this status to archive
     */

    public function archive()
    { 
        $this->update(['status' => 'Archived']);
        $this->fireModelEvent('updateStatistic', false);
    }
}
