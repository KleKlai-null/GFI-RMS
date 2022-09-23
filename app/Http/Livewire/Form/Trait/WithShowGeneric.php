<?php

namespace App\Http\Livewire\Form\Trait;
use Illuminate\Support\Str;
use App\Models\Department;
use App\Models\Form\Approval;
use App\Services\DocumentService;
use Illuminate\Support\Facades\Storage;

trait WithShowGeneric 
{
    public $listDepartments, $approvalDepartments;
    public $registerdepartments = [];

    public function getApprovalDepartment()
    {
        $this->approvalDepartments = Approval::DocumentSeries($this->data->document_series_no)->get();
    }

    public function getListDepartments()
    {
        $this->listDepartments = Department::select('name', 'description')->get();
    }

    public function save_department($redirect) 
    {
        $splice = Str::of($redirect)->explode('.');
        $path = DocumentService::getModelPath($splice[0]);

        sleep(1);

        foreach ($this->registerdepartments as $key => $department) {
            Approval::create([ 
                'approvable_id'                 => $this->data->id,
                'approvable_type'               => $path,
                'document_series_no'            => $this->data->document_series_no,
                'department'                    => $department
            ]);
        }

        return redirect()->route($redirect, $this->data);
    }

    public function download_pdf()
    {
        return Storage::disk('local')->download('bak/pdf/GFI-MI-2022-00005.pdf');
    }
}