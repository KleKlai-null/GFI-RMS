<?php

namespace App\Models\InformationSheet\Item;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\InformationSheet\Item\Item;

class ApprovalRoutingItems extends Model
{
    use HasFactory;

    protected $guarded = [
        'id', 'created_at', 'updated_at'
    ];

    public function approvalrouting(){
        return $this->belongsTo(Item::class);
    }
}
