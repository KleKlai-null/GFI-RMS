<?php

namespace App\Http\Livewire\Form\InformationSheet\FixedAsset;

use Livewire\Component;

class Index extends Component
{
    public $datas;
    public function render()
    {
        return view('livewire.form.information-sheet.fixed-asset.index', [
            'title' => 'Fixed Asset Sheet'
        ])->layout('layouts.tabler.app');
    }
}
