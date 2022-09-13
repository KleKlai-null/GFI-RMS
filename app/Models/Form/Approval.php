<?php

namespace App\Models\Form;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'approvable_id', 'approvable_type', 'document_series_no', 'handed_person', 'receive_person', 'department'
    ];

    public function approvable()
    {
        return $this->morphTo();
    }

    public function scopeDocumentSeries($query, $series_no)
    {
        return $query->where('document_series_no', $series_no);
    }
}
