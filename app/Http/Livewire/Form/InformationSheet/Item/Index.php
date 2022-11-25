<?php

namespace App\Http\Livewire\Form\InformationSheet\Item;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.form.information-sheet.item.index', [
            'title' => 'Item Information Sheet'
        ])->layout('layouts.tabler.app');
    }
}
