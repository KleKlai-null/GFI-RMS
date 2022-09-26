<?php

namespace App\Http\Livewire\Form\Approval;

use App\Models\Employee;
use App\Models\Form\Approval;
use App\Services\DocumentService;
use App\Services\NotificationService;
use Exception;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Throwable;

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
        
        try {
            $approval = Approval::DocumentSeries($this->document)
            ->where('department', $this->selectedDepartment)
            ->where('handed_person', null)->first();

            DB::beginTransaction();

                $approval->update([
                    'handed_person'     => $this->sender,
                    'receive_person'    => $this->employee->fullName(),
                    'department'        => $this->selectedDepartment
                ]);

                $model = DocumentService::getDocument($this->document);
                $model->update([
                    'current_department' => $this->selectedDepartment
                ]);

                NotificationService::notifyAdministrator('#', $this->document, 'Document has been handed to '. $this->selectedDepartment);

                DocumentService::check_approval_department_fullfillment($this->document);

                session()->flash('approvalsubmissionSuccess', 'Submission Received!');


            DB::commit();

        } catch (Exception $exception) {
            DB::rollback();
            return $this->sendError($exception);
        } catch (Throwable $throwable) {
            DB::rollback();
            return $this->sendError($throwable);
        }
    }
}
