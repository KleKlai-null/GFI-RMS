<?php

namespace App\Http\Livewire\Form\InformationSheet\BusinessPartner;

use Livewire\Component;
use App\Http\Livewire\Form\Trait\Generic;
use App\Http\Livewire\Form\Trait\WithSorting;
use Livewire\WithPagination;

class Index extends Component
{
    use WithSorting, Generic, WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $model = 'App\Models\InformationSheet\BP\BusinessPartner';
    public $search = '';

    public function mount(){
        $this->get_statistic();
    }

    public function render()
    {
        $data = $this->search($this->model);
        
        return view('livewire.form.information-sheet.business-partner.index', [
            'title' => 'Business Partner Sheet',
            'datas' => $data,
            'statistic'     => $this->statistics
        ])->layout('layouts.tabler.app');
    }
}
