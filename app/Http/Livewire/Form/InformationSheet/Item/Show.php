<?php

namespace App\Http\Livewire\Form\InformationSheet\Item;

use Livewire\Component;
use App\Models\InformationSheet\Item\Item;
use App\Http\Livewire\Form\Trait\WithShowGeneric;

class Show extends Component
{

    use WithShowGeneric;
    public $data;

    public function render()
    {
        return view('livewire.form.information-sheet.item.show', [
            'title' => 'Item Information Sheet'
        ])->layout('layouts.tabler.app');
    }
    
    public function mount(Item $data){
        $this->data = $data;
    }

    public function regenerate_pdf()
    {
        event(new bpinformationsheet($this->data));
    }
}
