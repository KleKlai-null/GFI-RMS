<?php

namespace App\Http\Livewire\Form\InformationSheet\Item;

use Livewire\Component;
use Livewire\WithPagination;
class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $model = 'App\Models\InformationSheet\Item\Item';
    public function render()
    {
        $data = $this->model::select('*')->paginate(6);
        return view('livewire.form.information-sheet.item.index', [
            'title' => 'Item Information Sheet',
            'datas' => $data,
        ])->layout('layouts.tabler.app');
    }
}
