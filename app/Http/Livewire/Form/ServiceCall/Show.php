<?php

namespace App\Http\Livewire\Form\ServiceCall;

use App\Http\Livewire\Form\Trait\WithShowGeneric;
use App\Models\Form\ServiceCall as Model;
use Livewire\Component;

class Show extends Component
{
    use WithShowGeneric;

    public $data;
    public $redirect = 'sc.show'; // Dynamically redirect on save_department()

    public function mount(Model $data)
    {
        $this->data = $data;
        $this->getListDepartments();
        $this->getApprovalDepartment();
    }

    public function render()
    {
        return view('livewire.form.service-call.show')->layout('layouts.tabler.app');
    }
}
