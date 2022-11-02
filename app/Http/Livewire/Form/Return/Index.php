<?php

namespace App\Http\Livewire\Form\Return;

use Livewire\Component;
use App\Http\Livewire\Form\Trait\WithSorting;
use Livewire\WithPagination;

class Index extends Component
{
    use WithSorting, WithPagination;

    public $search = '';
    public $model = 'App\Models\Form\ReturnSlip\ReturnSlip';

    public function render()
    {
        $data = $this->model::search('document_series_no', '%'.$this->search.'%')->orderBy('id', 'desc')->paginate(5);

        return view('livewire.form.return.index', [
            'title'         => 'Return Items',
            'datas'         => $data
        ])->layout('layouts.tabler.app');
    }
}
