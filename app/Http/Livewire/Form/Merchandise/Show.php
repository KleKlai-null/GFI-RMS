<?php

namespace App\Http\Livewire\Form\Merchandise;

use App\Events\PDF\MI;
use App\Http\Livewire\Form\Trait\WithShowGeneric;
use App\Models\Department;
use App\Models\Form\Approval;
use App\Models\Form\WithdrawalSlip\Wsmi as Model;
use Livewire\Component;

class Show extends Component
{
    use WithShowGeneric;

    public $data;
    public $redirect = 'mi.show'; // Dynamically redirect on save_department()

    public function mount(Model $data)
    {
        $this->data = $data;
        $this->getListDepartments();
        $this->getApprovalDepartment();
    }

    public function render()
    {
        return view('livewire.form.merchandise.show')->layout('layouts.tabler.app');
    }

    public function regenerate_pdf()
    {
        event(new MI($this->data));
    }

}
