<?php

namespace App\Http\Livewire\Form\FixedAsset;

use App\Http\Livewire\Form\Trait\GenericCreditMemo;
use App\Http\Livewire\Form\Trait\WithSorting;
use Livewire\Component;

class CreditMemoIndex extends Component
{
    use WithSorting, GenericCreditMemo;

    public $search = '';
    public $model = 'App\Models\Form\WithdrawalSlip\Wsfa';

    public function render()
    {

        $data = $this->search($this->model);

        return view('livewire.form.fixed-asset.credit-memo-index', [
            'title'         => 'Fixed Asset Credit Memo',
            'datas'         => $data,
        ])->layout('layouts.tabler.app');
    }
}
