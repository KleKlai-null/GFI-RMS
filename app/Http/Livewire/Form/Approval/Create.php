<?php

namespace App\Http\Livewire\Form\Approval;

use App\Models\Employee;
use App\Models\Form\Approval;
use Livewire\Component;

class Create extends Component
{
    public $selectedDepartment, $sender;
    public $departments = [];

    public $employee;
    public $document;

    public function mount(Employee $employee, $document)
    {
        $this->employee = $employee;
        $this->document = $document;
    }

    public function render()
    {
        $this->departments = Approval::DocumentSeries($this->document)->where('handed_person', null)->get();

        return view('livewire.form.approval.create')->layout('layouts.tabler.guest', [
            "bgwhite"   => 'bg-white'
        ]);
    }

    public function rules()
    {
        return [
            'sender'                => 'required',
            'selectedDepartment'    => 'required'
        ];
    }

    public function save()
    {
        $this->validate();
        
        $approval = Approval::DocumentSeries($this->document)
            ->where('department', $this->selectedDepartment)
            ->where('handed_person', null)->first();

        $approval->update([
            'handed_person'     => $this->sender,
            'receive_person'    => $this->employee->fullName(),
            'department'        => $this->selectedDepartment
        ]);

        session()->flash('approvalsubmissionSuccess', 'Submission Received!');
    }
}
