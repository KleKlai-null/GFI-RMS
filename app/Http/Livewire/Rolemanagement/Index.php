<?php

namespace App\Http\Livewire\Rolemanagement;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class Index extends Component
{
    public $name;

    public function render()
    {
        return view('livewire.rolemanagement.index',[
            'title'         => 'Roles',
            'roles'         =>  Role::select('name')->get(),
        ])->layout('layouts.tabler.app');
    }

    public function rules()
    {
        return [
            'name'  => ['required', 'unique:roles'],
        ];
    }

    public function save()
    {
        $this->validate();

        Role::create([
            'name'  => $this->name
        ]);

        $this->reset(); // Reset all properties

        session()->flash('message', 'Role successfully created.');
    }
}
