<?php

namespace App\Http\Livewire\Form\InformationSheet\BusinessPartner;

use Livewire\Component;
use App\Models\InformationSheet\BP\BusinessPartner;
use App\Services\DocumentService;

class Edit extends Component
{
    public $inputs = [];
    public $inputsContact = [];
    public $i = 1;
    public $contact = 1;

    public function render()
    {
        return view('livewire.form.information-sheet.business-partner.edit', [
            'title' => 'Business Partner Sheet'
        ])->layout('layouts.tabler.app');
    }

    public function mount(BusinessPartner $data){

        $this->data = $data;
        $this->revision_number = DocumentService::generateRevisionNumber($this->data->document_series_no,'BP');
        // array_push($this->inputs,$this->certification_name[$data->certifications->certification_name],$this->organization_certifying_body[$data->certifications->organization_certifying_body],
        // $this->certificate_date[$data->certifications->certificate_date],$this->expiry_date[$data->certifications->expiry_date]);
        // dd($data->certifications['certification_name']);

    }

    public function addCertification($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs, $i);
    }

    public function removeCertification($i)
    {
        unset($this->inputs[$i]);
        unset($this->inputs[$i],$this->certification_name[$i+1],$this->organization_certifying_body[$i+1],$this->certificate_date[$i+1],$this->expiry_date[$i+1]);
    }

    public function addContact($i)
    {
        $i = $i + 1;
        $this->contact = $i;
        array_push($this->inputsContact, $i);
    }

    public function removeContact($i)
    {
        unset($this->inputsContact[$i]);
        unset($this->inputsContact[$i],$this->name[$i+1],$this->positionC[$i+1],$this->email_address_contacts[$i+1],$this->phone_no[$i+1]);
    }

}
