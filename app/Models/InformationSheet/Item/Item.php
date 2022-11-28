<?php

namespace App\Models\InformationSheet\Item;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\InformationSheet\Item\ApprovalRoutingItems;

class Item extends Model
{
    use HasFactory;

    protected $guarded = [
        'id', 'created_at', 'updated_at'
    ];

    protected static function boot()
    {
        parent::boot();
        FixedAsset::creating(function($model) {
            $model->user_id = auth()->user()->id;
            $model->user_name = auth()->user()->username;
        });
    }

    public function approvalroutings(){
        return $this->hasMany(ApprovalRoutingItems::class);
    }
}
