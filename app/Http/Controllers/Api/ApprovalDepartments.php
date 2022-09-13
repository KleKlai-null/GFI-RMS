<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Form\Approval;
use App\Models\Form\WithdrawalSlip\Wsmi;
use Illuminate\Http\Request;

class ApprovalDepartments extends ApiController
{

    public function form_router(Request $request)
    {
        switch($request->form) {
            case 'wsmi':
                return $this->Wsmi($request);
                break;
            default:
                return $this->sendError('No matching form found!');
                break;
        }
    }

    public function Wsmi(Request $request)
    {
        // Check if there is existing Approval for given document series
        $approval_department = Approval::DocumentSeries($request->document_series_no)->count();
        
        if($approval_department > 0) {
            return $this->sendError($request->document_series_no . ' already has approval department.');
        }

        // Dynamically Create Approval Department for Form
        $wsmi = Wsmi::DocumentSeries($request->document_series_no)->first();
        
        //Check if document series no exist
        if($wsmi == null) {
            return $this->sendError("The requested document series no doesn't exist.");
        }

        foreach ($request->department as $key => $department) {
            Approval::create([ 
                'approvable_id'                 => $wsmi->id,
                'approvable_type'               => 'App\Models\Form\WithdrawalSlip\Wsmi',
                'document_series_no'            => $wsmi->document_series_no,
                'department'                    => $department['department']
            ]);
        }

        return $this->sendResponse('Success');
    }
}
