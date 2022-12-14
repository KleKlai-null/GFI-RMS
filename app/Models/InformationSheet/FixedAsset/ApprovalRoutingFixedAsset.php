<?php

namespace App\Models\InformationSheet\FixedAsset;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\InformationSheet\FixedAsset\FixedAsset;

class ApprovalRoutingFixedAsset extends Model
{
    use HasFactory;

    protected $guarded = [
        'id', 'created_at', 'updated_at'
    ];

    public function approvalrouting(){
        return $this->belongsTo(FixedAsset::class);
    }
}
