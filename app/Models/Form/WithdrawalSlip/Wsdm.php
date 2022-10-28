<?php

namespace App\Models\Form\WithdrawalSlip;

use App\Events\PDF\DM;
use App\Models\Form\Item\DmItem;
use App\Models\User;
use App\Services\DocumentService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use App\Models\Form\Approval;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Wsdm extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $guarded = [
        'id', 'created_at', 'updated_at'
    ];

    protected $observables = ['updateStatistic'];

    protected $dispatchesEvents = [
        'created'   => DM::class
    ];

    protected static function boot()
    {
        parent::boot();

        Wsdm::creating(function($model) {
            $model->user_id = auth()->user()->id;
            $model->user_name = auth()->user()->username;
        });
    }

    /**
     * Relationship
     */

    public function items() : HasMany
    {
        return $this->hasMany(DmItem::class);
    }

    public function approval() : MorphMany
    {
        return $this->morphMany(Approval::class, 'approvable');
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
