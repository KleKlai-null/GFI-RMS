<?php

namespace App\Http\Livewire\Form\InformationSheet\BusinessPartner;

use Livewire\Component;
use App\Models\InformationSheet\BP\BusinessPartner;
use App\Http\Livewire\Form\Trait\WithShowGeneric;
use App\Events\PDF\bpinformationsheet;

class Show extends Component
{
    use WithShowGeneric;

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

    public function regenerate_pdf()
    {
        event(new bpinformationsheet($this->data));
    }
}
