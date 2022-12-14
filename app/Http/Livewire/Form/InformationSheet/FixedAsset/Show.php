<?php

namespace App\Http\Livewire\Form\InformationSheet\FixedAsset;

use Livewire\Component;
use App\Models\InformationSheet\FixedAsset\FixedAsset;
use App\Http\Livewire\Form\Trait\WithShowGeneric;

class Show extends Component
{

    use WithShowGeneric;
    public $data;

    public function render()
    {
        return view('livewire.form.information-sheet.fixed-asset.show', [
            'title' => 'Fixed Asset Sheet'
        ])->layout('layouts.tabler.app');
    }

    public function mount(FixedAsset $data){
        $this->data = $data;
    }

    public function regenerate_pdf()
    {
        event(new bpinformationsheet($this->data));
    }
}
