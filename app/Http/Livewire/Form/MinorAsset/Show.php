<?php

namespace App\Http\Livewire\Form\MinorAsset;

use App\Http\Livewire\Form\Trait\WithShowGeneric;
use App\Models\Form\WithdrawalSlip\Wsma as Model;
use Livewire\Component;

class Show extends Component
{
    use WithShowGeneric;

    public $data;
    public $redirect = 'ma.show'; // Dynamically redirect on save_department()

    public function mount(Model $data)
    {
        $this->data = $data;
        $this->getListDepartments();
        $this->getApprovalDepartment();
    }

    public function render()
    {
        return view('livewire.form.minor-asset.show')->layout('layouts.tabler.app');
    }
}
