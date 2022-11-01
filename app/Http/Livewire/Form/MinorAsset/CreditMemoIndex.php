<?php

namespace App\Http\Livewire\Form\MinorAsset;

use App\Http\Livewire\Form\Trait\GenericCreditMemo;
use App\Http\Livewire\Form\Trait\WithSorting;
use Livewire\Component;

class CreditMemoIndex extends Component
{
    use WithSorting, GenericCreditMemo;

    public $search = '';
    public $model = 'App\Models\Form\WithdrawalSlip\Wsma';

    public function render()
    {
        $data = $this->search($this->model);
      
        return view('livewire.form.minor-asset.credit-memo-index', [
            'title'         => 'Minor Asset Credit Memo',
            'datas'         => $data,
        ])->layout('layouts.tabler.app');
    }
}
