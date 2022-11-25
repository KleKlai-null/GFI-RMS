<?php

namespace App\Http\Livewire\Form\InformationSheet\Item;

use Livewire\Component;

class Show extends Component
{
    public function render()
    {
        return view('livewire.form.information-sheet.item.show', [
            'title' => 'Item Information Sheet'
        ])->layout('layouts.tabler.app');
    }
}
