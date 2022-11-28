<?php

namespace App\Models\InformationSheet\BP;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\InformationSheet\BP\Certification;
use App\Models\InformationSheet\BP\ContactPerson;
use App\Models\InformationSheet\BP\ApprovalRouting;
use App\Models\InformationSheet\BP\DocumentTable;

class BusinessPartner extends Model
{
    use HasFactory;

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
}
