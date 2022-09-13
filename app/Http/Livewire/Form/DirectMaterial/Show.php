<?php

namespace App\Http\Livewire\Form\DirectMaterial;

use App\Http\Livewire\Form\Trait\WithShowGeneric;
use App\Models\Form\WithdrawalSlip\Wsdm as Model;
use Livewire\Component;

class Show extends Component
{
    use WithShowGeneric;

    public $data;
    public $redirect = 'dm.show'; // Dynamically redirect on save_department()

    public function mount(Model $data)
    {
        $this->data = $data;
        $this->getListDepartments();
        $this->getApprovalDepartment();
    }

    public function render()
    {
        return view('livewire.form.direct-material.show')->layout('layouts.tabler.app');
    }
}
