<?php

namespace App\Http\Livewire\Form\Approval;

use App\Models\Employee;
use App\Models\Form\Approval;
use App\Services\DocumentService;
use Livewire\Component;

class Create extends Component
{
    public $selectedDepartment, $sender;
    public $departments = [];

    public $employee;
    public $document;

    public function mount(Employee $employee, $document)
    {
        $is_allow = DocumentService::approval_allow_entries($document);

        if($is_allow != 1){
            return abort(503, $is_allow);
        }

        $this->employee = $employee;
        $this->document = $document;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
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

    public function messages()
    {
        return [
            'sender.required'               => "Don't be afraid tell us where you get this form",
            'selectedDepartment.required'   => "Oh come on! We just only need your department."
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

        DocumentService::check_approval_department_fullfillment($this->document);

        session()->flash('approvalsubmissionSuccess', 'Submission Received!');
    }
}
