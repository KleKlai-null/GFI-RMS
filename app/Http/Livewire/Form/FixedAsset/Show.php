<?php

namespace App\Http\Livewire\Form\FixedAsset;

use App\Http\Livewire\Form\Trait\WithShowGeneric;
use App\Models\Form\WithdrawalSlip\Wsfa as Model;
use Livewire\Component;

class Show extends Component
{
    use WithShowGeneric;

    public $data;
    public $redirect = 'fa.show'; // Dynamically redirect on save_department()

    public function mount(Model $data)
    {
        $this->data = $data;
        $this->getListDepartments();
        $this->getApprovalDepartment();
    }

    public function render()
    {
        return view('livewire.form.fixed-asset.show')->layout('layouts.tabler.app');
    }
}
