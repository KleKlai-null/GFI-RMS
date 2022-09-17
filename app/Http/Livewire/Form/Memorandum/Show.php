<?php

namespace App\Http\Livewire\Form\Memorandum;

use App\Http\Livewire\Form\Trait\WithShowGeneric;
use App\Models\Form\Memorandum as Model;
use Livewire\Component;

class Show extends Component
{
    use WithShowGeneric;

    public $data;
    public $redirect = 'mr.show'; // Dynamically redirect on save_department()

    public function mount(Model $data)
    {
        $this->data = $data;
        $this->getListDepartments();
        $this->getApprovalDepartment();
    }

    public function render()
    {
        return view('livewire.form.memorandum.show')->layout('layouts.tabler.app');
    }
}
