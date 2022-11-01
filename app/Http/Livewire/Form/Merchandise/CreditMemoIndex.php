<?php

namespace App\Http\Livewire\Form\Merchandise;

use App\Http\Livewire\Form\Trait\GenericCreditMemo;
use App\Http\Livewire\Form\Trait\WithSorting;
use Livewire\Component;

class CreditMemoIndex extends Component
{
    use WithSorting, GenericCreditMemo;

    public $search = '';
    public $model = 'App\Models\Form\WithdrawalSlip\Wsmi';

    public function render()
    {
        $data = $this->search($this->model);

        return view('livewire.form.merchandise.credit-memo-index', [
            'title'         => 'Merchandise Credit Memo',
            'datas'         => $data,
        ])->layout('layouts.tabler.app');
    }
}
