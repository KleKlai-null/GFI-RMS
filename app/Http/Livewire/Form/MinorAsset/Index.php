<?php

namespace App\Http\Livewire\Form\MinorAsset;

use App\Http\Livewire\Form\Trait\Generic;
use App\Http\Livewire\Form\Trait\WithSorting;
use Livewire\Component;

class Index extends Component
{
    use WithSorting, Generic;

    public $search = '';
    public $model = 'App\Models\Form\WithdrawalSlip\Wsma';

    public function mount()
    {
        $this->get_statistic();
    }

    public function render()
    {
        $data = $this->search($this->model);
      
        return view('livewire.form.minor-asset.index', [
            'title'         => 'Minor Asset',
            'datas'         => $data,
            'statistic'     => $this->statistics
        ])->layout('layouts.tabler.app');
    }
}
