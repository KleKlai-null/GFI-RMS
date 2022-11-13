<?php

namespace App\Models\Form\ReturnSlip;

use App\Events\PDF\RS;
use App\Models\Form\Item\ReturnItem;
use App\Models\User;
use App\Services\DocumentService;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class ReturnSlip extends Model  implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $guarded = [
        'id', 'created_at', 'updated_at'
    ];

    // protected $dispatchesEvents = [
    //     'created'   => RS::class
    // ];

    protected static function boot()
    {
        parent::boot();

        ReturnSlip::creating(function($model) {
            $model->document_series_no = DocumentService::GenerateSeriesNo('GFI', 'RS');
            $model->user_id = auth()->user()->id;
        });
    }

    /**
     * Relationship
     */

    public function items()
    {
        return $this->hasMany(ReturnItem::class);
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Mutators Accessors
     */

    protected function withdrawalForm(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ucwords($value),
            set: fn ($value) => strtolower($value),
        );
    }

    /**
     * Query Scope
     */
    public function scopeDocumentSeries($query, $series_no)
    {
        return $query->where('document_series_no', $series_no);
    }

    public function scopeGetData($query, $type)
    {
        if(auth()->user()->hasRole('administrator')) {
            return $query->with('items')->where('withdrawal_form', $type)->orderBy('id', 'desc');
        } else {
            return $query->with('items')->where('user_id', auth()->user()->id)->where('withdrawal_form', $type)->orderBy('id', 'desc');
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
