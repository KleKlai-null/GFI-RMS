<?php

namespace App\Http\Livewire\Form\ServiceCall;

use App\Http\Livewire\Form\Trait\Generic;
use App\Http\Livewire\Form\Trait\WithSorting;
use Livewire\Component;

class Index extends Component
{
    use WithSorting, Generic;

    public $search = '';
    public $model = 'App\Models\Form\ServiceCall';

    public function mount()
    {
        $this->get_statistic();
    }

    public function render()
    {

        $data = $this->search($this->model);
        
        return view('livewire.form.service-call.index', [
            'title'         => 'Service Call',
            'datas'         => $data,
            'statistic'     => $this->statistics
        ])->layout('layouts.tabler.app');
    }
}
