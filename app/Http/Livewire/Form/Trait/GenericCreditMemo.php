<?php 

namespace App\Http\Livewire\Form\Trait;

use App\Services\DocumentService;
use Carbon\Carbon;

trait GenericCreditMemo
{
    public $status = 'Open';

    public function search($model)
    {
        if(auth()->user()->hasRole('administrator'))
        {
            return $model::SearchWithCM('cm_document_series_no', '%'.$this->search.'%')->where('status', $this->status)->orderBy('id', 'desc')->get();
        }

        return $model::SearchWithCM('cm_document_series_no', '%'.$this->search.'%')->where('status', $this->status)->where('user_id', auth()->user()->id)->orderBy('id', 'desc')->get();
    }
}