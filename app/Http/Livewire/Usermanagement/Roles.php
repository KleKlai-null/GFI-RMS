<?php

namespace App\Http\Livewire\Usermanagement;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Roles extends Component
{
    public $data;
    public $roles;
    public $selected_roles = [];
    public $permissions;
    public $current_roles;

    public function mount(User $data)
    {
        $this->data = $data;
        $this->roles = Role::select('name')->get();
        $this->current_roles = $data->getRoleNames();
        array_push($this->selected_roles, $this->current_roles);
    }

    public function render()
    {
        return view('livewire.usermanagement.roles')->layout('layouts.tabler.app');
    }

    public function save()
    {
        unset($this->selected_roles[$i]);
        // dd();
        // $this->data->syncRole();
    }
}
