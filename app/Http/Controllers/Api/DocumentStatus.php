<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Form\Approval;
use App\Models\Form\ApprovalDepartment;
use App\Models\Form\Status;
use App\Models\Form\WithdrawalSlip\Wsmi;
use App\Services\DocumentService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DocumentStatus extends ApiController
{      
    public function handler(Request $request)
    {
        try {

            # check total number of departments
            $departments = Status::DocumentSeries($request->document_series_no)->get();

            if($departments->isEmpty()) {
                return $this->sendError("It's seems " . $request->document_series_no . ' has no approval department. Please create first.');
            }

            DB::beginTransaction();

            foreach($departments as $dept) {

                if(empty($dept->assigned_person)) {

                    $dept->update([
                        'assigned_person'   => $request->assigned_person,
                    ]);

                    break;
                }
            }

            $departments = Approval::DocumentSeries($request->document_series_no)->where('assigned_person', null)->count();

            if($departments == 0) {
                $wsmi = Wsmi::DocumentSeries($request->document_series_no)->first();

                $wsmi->update([
                   'status_label' => 'Close' 
                ]);
            }

            DB::commit();

            return $this->sendResponse($departments);
            
        } catch (Exception $exception) {

            DB::rollback();

            return $this->sendError($exception);
        }
    }

    public function handoverDocument(Request $request)
    {
        # check total number of departments
        $departments = Approval::DocumentSeries($request->document_series_no)->get();

        if($departments->isEmpty()) {
            return $this->sendError("It's seems " . $request->document_series_no . ' has no approval department. Please create first.');
        }

        DB::beginTransaction();

        $departments->update([
            'handed_person'     => $request->handed_person
        ]);

        //Rescan documents if all field fullfilled

        $departments = Approval::DocumentSeries($request->document_series_no)->where('handed_person', null)->where('receive_person', null)->count();

        if($departments == 0) {

            $model = DocumentService::getDocument($request->document_series_no);

            $model->update([
                'status_label' => 'Close' 
            ]);
        }

        DB::commit();
    }
}
