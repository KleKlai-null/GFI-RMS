<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;
use Livewire\WithFileUploads;

class Import extends Component
{
    use WithFileUploads;
    public $file;

    public function rules() {
        return [
            'file'  => 'required|file|max:10000|mimes:csv'
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.form.import');
    }

    public function Upload()
    {
        $this->validate();
        dd($this->file);
    }
}
