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

    public $certification_name = []; 
    public $organization_certifying_body = []; 
    public $certificate_date = []; 
    public $expiry_date = [];

    public $name = []; 
    public $positionC = []; 
    public $email_address_contacts = []; 
    public $phone_no = [];

    public $data;
    public $revision_number;

    public function render()
    {
        return view('livewire.form.information-sheet.business-partner.edit', [
            'title' => 'Business Partner Sheet'
        ])->layout('layouts.tabler.app');
    }

    public function mount(BusinessPartner $data){

        $this->data = $data;
        $this->revision_number = DocumentService::generateRevisionNumber($this->data->document_series_no,'BP');
        
        foreach ($data->certifications as $key => $item) {
            array_push($this->inputs, $key);
            array_push($this->certification_name, $item->certification_name);
            array_push($this->organization_certifying_body, $item->organization_certifying_body);
            array_push($this->certificate_date, $item->certificate_date);
            array_push($this->expiry_date, $item->expiry_date);
            $this->i =+ $key;
        }

        foreach ($data->contactpersons as $key => $item) {
            array_push($this->inputsContact, $key);
            array_push($this->name, $item->name);
            array_push($this->positionC, $item->position);
            array_push($this->email_address_contacts, $item->email_address_contacts);
            array_push($this->phone_no, $item->phone_no);
            $this->contact =+ $key;
        }
    }

    public function addCertification($i)
    { 
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs, $i);
    }

    public function removeCertification($i)
    {
        // unset($this->inputs[$i]);
        unset($this->inputs[$i],$this->certification_name[$i],$this->organization_certifying_body[$i],$this->certificate_date[$i],$this->expiry_date[$i]);
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
        unset($this->inputsContact[$i],$this->name[$i],$this->positionC[$i],$this->email_address_contacts[$i],$this->phone_no[$i]);
    }

    // public function submit($request){
    //     dd($request['remarks']);
    // }
}
