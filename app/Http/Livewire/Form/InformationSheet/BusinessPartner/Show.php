<?php

namespace App\Http\Livewire\Form\InformationSheet\BusinessPartner;

use Livewire\Component;
use App\Models\InformationSheet\BP\BusinessPartner;

class Show extends Component
{
    public $data;
    public function render()
    {
        return view('livewire.form.information-sheet.business-partner.show', [
            'title' => 'Business Partner Sheet'
        ])->layout('layouts.tabler.app');
    }
    public function mount(BusinessPartner $data){
        $this->data = $data;
    }
}
