<?php

namespace App\Models\InformationSheet\BP;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\InformationSheet\BP\Certification;
use App\Models\InformationSheet\BP\ContactPerson;
use App\Models\InformationSheet\BP\ApprovalRouting;
use App\Models\InformationSheet\BP\DocumentTable;
use Illuminate\Support\Facades\DB;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class BusinessPartner extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    //change guarded
    protected $guarded = [
        'id', 'created_at', 'updated_at'
    ];

    protected static function boot()
    {
        parent::boot();
        BusinessPartner::creating(function($model) {
            $model->user_id = auth()->user()->id;
            $model->user_name = auth()->user()->username;
        });
    }

    protected $with =[
        'certifications',
        'contactpersons',
    ];

    public function certifications(){
        return $this->hasMany(Certification::class);
    }

    public function contactpersons(){
        return $this->hasMany(ContactPerson::class);
    }

    public function approvalrouting(){
        return $this->hasOne(ApprovalRouting::class);
    }

    public function documenttable(){
        return $this->hasOne(DocumentTable::class);
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
