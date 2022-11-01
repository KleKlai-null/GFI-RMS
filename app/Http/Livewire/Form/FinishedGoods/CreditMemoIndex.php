<?php

namespace App\Http\Livewire\Form\FinishedGoods;

use App\Http\Livewire\Form\Trait\GenericCreditMemo;
use App\Http\Livewire\Form\Trait\WithSorting;
use Livewire\Component;

class CreditMemoIndex extends Component
{
    use WithSorting, GenericCreditMemo;

    public $search = '';
    public $model = 'App\Models\Form\WithdrawalSlip\Wsfg';

    public function render()
    {
        $data = $this->search($this->model);

        return view('livewire.form.finished-goods.credit-memo-index', [
            'title'         => 'Finished Goods Credit Memo',
            'datas'         => $data,
        ])->layout('layouts.tabler.app');
    }
}
