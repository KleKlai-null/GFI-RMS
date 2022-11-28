<?php

namespace App\Http\Livewire\Form\InformationSheet\BusinessPartner;

use Livewire\Component;
use Livewire\WithPagination;
class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $model = 'App\Models\InformationSheet\BP\BusinessPartner';
    public function render()
    {
        $data = $this->model::paginate(6);
        return view('livewire.form.information-sheet.business-partner.index', [
            'title' => 'Business Partner Sheet',
            'datas' => $data,
        ])->layout('layouts.tabler.app');
    }
}
