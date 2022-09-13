<?php

namespace App\Http\Livewire\Usermanagement;

use App\Models\User;
use Livewire\Component;

class Show extends Component
{
    public $data;

    public function mount(User $data)
    {
        $this->data = $data;
    }

    public function render()
    {
        return view('livewire.usermanagement.show')->layout('layouts.tabler.app');
    }
}
