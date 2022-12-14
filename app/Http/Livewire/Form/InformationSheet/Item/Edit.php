<?php

namespace App\Http\Livewire\Form\InformationSheet\Item;

use Livewire\Component;
use App\Models\InformationSheet\Item\Item;
use App\Services\DocumentService;

class Edit extends Component
{

    public $data;
    public $revision_number;

    public function render()
    {
        return view('livewire.form.information-sheet.item.edit', [
            'title' => 'Item Information Sheet'
        ])->layout('layouts.tabler.app');
    }

    public function mount(Item $data){

        $this->data = $data;
        $this->revision_number = DocumentService::generateRevisionNumber($this->data->document_series_no,'IT');

    }
}
