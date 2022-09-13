<?php

namespace App\Http\Livewire\Form\Component\Departments;

use Livewire\Component;

class Index extends Component
{
    public $name, $description;

    public $model = 'App\Models\Department';

    public function render()
    {
        return view('livewire.form.component.departments.index',[
            'title'         => 'Departments',
            'departments'   =>  $this->model::select('id', 'name', 'description')->get()
        ])->layout('layouts.tabler.app');
    }

    public function rules()
    {
        return [
            'name'          => 'required',
            'description'   => 'nullable|max:40'
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
