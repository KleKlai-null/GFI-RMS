<?php

namespace App\Models\InformationSheet\BP;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\InformationSheet\BP\BusinessPartner;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class ContactPerson extends Model
{
    use HasFactory;
    protected $guarded = [
        'id', 'created_at', 'updated_at'
    ];

    public function contactperson()
    {
        return $this->belongsTo(BusinessPartner::class);
    }
}
