<?php

namespace App\Http\Livewire\Form\Return;

use App\Http\Livewire\Form\Trait\WithShowGeneric;
use App\Models\Form\ReturnSlip\ReturnSlip as Model;
use Livewire\Component;

class Show extends Component
{
    use WithShowGeneric;

    public $data;
    public $redirect = 'rs.show'; // Dynamically redirect on save_department()

    public function mount(Model $data)
    {
        $this->data = $data;
        $this->getListDepartments();
        $this->getApprovalDepartment();
    }

    public function render()
    {
        return view('livewire.form.return.show')->layout('layouts.tabler.app');
    }
}
