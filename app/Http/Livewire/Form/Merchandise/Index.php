<?php

namespace App\Http\Livewire\Form\Merchandise;

use App\Http\Livewire\Form\Trait\Generic;
use App\Http\Livewire\Form\Trait\WithSorting;
use Livewire\Component;

class Index extends Component
{
    use WithSorting, Generic;

    public $search = '';
    public $model = 'App\Models\Form\WithdrawalSlip\Wsmi';

    public function mount()
    {
        $this->get_statistic();
    }

    public function render()
    {
        $data = $this->search($this->model);

        return view('livewire.form.merchandise.index', [
            'title'         => 'Merchandise',
            'datas'         => $data,
            'statistic'     => $this->statistics
        ])->layout('layouts.tabler.app');
    }

    
}
