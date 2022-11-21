<?php

namespace App\Http\Livewire\Form\InformationSheet\Item;

use Livewire\Component;

class Create extends Component
{
    public function render()
    {
        return view('livewire.form.information-sheet.item.create', [
            'title' => 'Item Information Sheet'
        ])->layout('layouts.tabler.app');
    }
}
