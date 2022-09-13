<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FormApprovalResource;
use App\Models\Form\Approval;
use App\Models\Form\WithdrawalSlip\Wsmi;
use App\Services\DocumentService;
use Illuminate\Http\Request;

class FormHandOverController extends ApiController
{
    public function form_departments(Request $request)
    {
        $data = Approval::DocumentSeries($request->document_series_no)->select('id', 'department')->get();

        return $this->sendResponse(FormApprovalResource::collection($data));
    }

    public function form_department_available(Request $request)
    {
        if($request->type == 'Handover') {
            $data = Approval::DocumentSeries($request->document_series_no)->where('handed_person', null)->select('id', 'department')->get();
            return $this->sendResponse(FormApprovalResource::collection($data));

        } else if($request->type == 'Receive') {
            $data = Approval::DocumentSeries($request->document_series_no)->where('receive_person', null)->select('id', 'department')->get();
            return $this->sendResponse(FormApprovalResource::collection($data));
        }
    }

    public function handover_form(Request $request)
    {
        // Check if there is approval department for requested document
        $approval_department = Approval::DocumentSeries($request->document_series_no)->count();

        if($approval_department == 0) {
            return $this->sendError("It's seems " . $request->document_series_no . ' has no approval department or the record seems does not exist.');
        }

        // Check approval form if all has value
        $hasPerson = Approval::DocumentSeries($request->document_series_no)->where('handed_person', null)->count();

        if($hasPerson == 0) {
            return $this->sendError("Can't do that!");
        }

        // Check if the form status is open or close
        $form = DocumentService::getDocument($request->document_series_no);

        if($form->status == 'Close') {
            return $this->sendError('Form already close');
        }
        
        $approval = Approval::DocumentSeries($request->document_series_no)->where('department', $request->department)->where('handed_person', null)->where('department', $request->department)->first();

        if($approval == null) {
            return $this->sendError($request->document_series_no . ' with department '. $request->department .' could not be found.');
        }

        $approval->update([
            'handed_person'     => $request->person,
        ]);

        $handed_person = Approval::DocumentSeries($request->document_series_no)->where('handed_person', null)->count();
        $receive_person = Approval::DocumentSeries($request->document_series_no)->where('receive_person', null)->count();

        if($handed_person == 0 && $receive_person == 0) {

            $model = DocumentService::getDocument($request->document_series_no);

            $model->update([
                'status' => 'Close' 
            ]);

            return $this->sendResponse($request->document_series_no . ' status has been close');
        }

        return $this->sendResponse('Success');
    }

    public function receive_form(Request $request)
    {
        // Check if there is approval department for requested document
        $approval_department = Approval::DocumentSeries($request->document_series_no)->count();

        if($approval_department == 0) {
            return $this->sendError("It's seems " . $request->document_series_no . ' has no approval department or the record seems does not exist.');
        }

        // Check if the form status is open or close
        $form = DocumentService::getDocument($request->document_series_no);

        if($form->status == 'Close') {
            return $this->sendError('Form already close');
        }
        
        $approval = Approval::DocumentSeries($request->document_series_no)->where('department', $request->department)->where('receive_person', null)->where('department', $request->department)->first();

        if($approval == null) {
            return $this->sendError($request->document_series_no . ' with department '. $request->department .' could not be found.');
        }

        $approval->update([
            'receive_person'     => $request->person,
        ]);

        $handed_person = Approval::DocumentSeries($request->document_series_no)->where('handed_person', null)->count();
        $receive_person = Approval::DocumentSeries($request->document_series_no)->where('receive_person', null)->count();

        if($handed_person == 0 && $receive_person == 0) {

            $model = DocumentService::getDocument($request->document_series_no);

            $model->update([
                'status' => 'Close' 
            ]);

            return $this->sendResponse($request->document_series_no . ' status has been close');
        }

        return $this->sendResponse('Success');
    }
}
