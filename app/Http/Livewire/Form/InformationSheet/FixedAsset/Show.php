<?php

namespace App\Http\Livewire\Form\InformationSheet\FixedAsset;

use Livewire\Component;

class Show extends Component
{
    public function render()
    {
        return view('livewire.form.information-sheet.fixed-asset.show', [
            'title' => 'Fixed Asset Sheet'
        ])->layout('layouts.tabler.app');
    }
}
