<?php

namespace App\Http\Livewire\Form\Component\Employee;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Index extends Component
{
    public $employee_id, $first_name, $last_name, $middle_name;

    public $model = 'App\Models\Employee';

    public function render()
    {
        return view('livewire.form.component.employee.index',[
            'title'         => 'Employees',
            'departments'   => $this->model::select('id', 'employee_id', 'first_name', 'last_name', 'middle_name')->get()
        ])->layout('layouts.tabler.app');
    }

    public function rules()
    {
        return [
            'employee_id'   => 'required',
            'first_name'    => 'required|string',
            'last_name'     => 'required|string',
            'middle_name'   => 'nullable|string'
        ];
    }

    public function delete($id)
    {
        $this->model::find($id)->delete();
    }

    public function save()
    {
        $this->validate();
        $this->model::create($this->validate());
        $this->reset(); // Reset all properties
    }
}
