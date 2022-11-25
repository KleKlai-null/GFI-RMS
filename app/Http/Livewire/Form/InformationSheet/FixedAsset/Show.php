<?php

namespace App\Http\Livewire\Form\InformationSheet\FixedAsset;

use Livewire\Component;
use App\Models\InformationSheet\FixedAsset\FixedAsset;
class Show extends Component
{
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
}
