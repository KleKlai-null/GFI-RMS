<?php

namespace App\Models\Form;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormStatistic extends Model
{
    use HasFactory;

    protected $fillable = [
        'form',
        'total',
        'open',
        'closed',
        'archived'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'total'             => 'integer',
        'open'              => 'integer',
        'closed'            => 'integer',
        'archived'          => 'integer',
    ];
}
