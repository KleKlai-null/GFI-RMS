<?php

namespace App\Http\Livewire\Form\Maintenance;

use App\Http\Livewire\Form\Trait\GenericCreditMemo;
use App\Http\Livewire\Form\Trait\WithSorting;
use Livewire\Component;

class CreditMemoIndex extends Component
{
    use WithSorting, GenericCreditMemo;

    public $search = '';
    public $model = 'App\Models\Form\WithdrawalSlip\Wsmro';

    public function render()
    {
        $data = $this->search($this->model);
        
        return view('livewire.form.maintenance.credit-memo-index', [
            'title'         => 'Maintenance, Repairs and Operations Credit Memo',
            'datas'         => $data,
        ])->layout('layouts.tabler.app');
    }
}
