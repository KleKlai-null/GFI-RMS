<?php

namespace App\Http\Livewire\Form\DirectMaterial;

use App\Http\Livewire\Form\Trait\GenericCreditMemo;
use App\Http\Livewire\Form\Trait\WithSorting;
use Livewire\Component;

class CreditMemoIndex extends Component
{
    use WithSorting, GenericCreditMemo;

    public $search = '';
    public $model = 'App\Models\Form\WithdrawalSlip\Wsdm';

    public function render()
    {
        $data = $this->search($this->model);
        
        return view('livewire.form.direct-material.credit-memo-index', [
            'title'         => 'Direct Material Credit Memo',
            'datas'         => $data,
        ])->layout('layouts.tabler.app');
    }
}
