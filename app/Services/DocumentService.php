<?php

namespace App\Services;

use App\Models\Form\Approval;
use Illuminate\Support\Str;
use App\Models\Form\ReturnSlip\ReturnSlip;
use App\Models\Form\WithdrawalSlip\Wsdm;
use App\Models\Form\WithdrawalSlip\Wsfa;
use App\Models\Form\WithdrawalSlip\Wsfg;
use App\Models\Form\WithdrawalSlip\Wsma;
use App\Models\Form\WithdrawalSlip\Wsmi;
use App\Models\Form\WithdrawalSlip\Wsmro;
use App\Models\Form\Memorandum;
use App\Models\Form\ServiceCall;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Throwable;

class DocumentService
{

    public static function GenerateSeriesNo($company, $documentCode, $credit_memo = false)
    {
        $count =  DocumentService::getCount($documentCode);
        $series = sprintf("%010d", $count + 1);

        $first_series_no = strtoupper($company . '-' . $documentCode);

        if($credit_memo) {
            $second_series_no = $first_series_no . '-' . 'CM'. '-' . $series;
        } else {
            $second_series_no = $first_series_no . '-' . $series;
        }

        return $second_series_no;
    }

    public static function GenerateSeriesNoForCM($company, $documentCode, $credit_memo = false)
    {
        $count =  DocumentService::getCountCM($documentCode);
        $series = sprintf("%010d", $count + 1);

        $first_series_no = strtoupper($company . '-' . $documentCode);

        $second_series_no = $first_series_no . '-' . 'CM'. '-' . $series;

        return $second_series_no;
    }

    // Get document count
    public static function getCount($documentCode)
    {
        $unique = Str::lower($documentCode);

        switch ($unique) {
            case "mi":

                $data = Wsmi::whereNull('cm_document_series_no')->withTrashed()->count();

                return $data;
                break;
            case "mro":
                $data = Wsmro::whereNull('cm_document_series_no')->withTrashed()->count();

                return $data;
                break;
            case "dm":
                $data = Wsdm::whereNull('cm_document_series_no')->withTrashed()->count();

                return $data;
                break;
            case "fg":
                $data = Wsfg::whereNull('cm_document_series_no')->withTrashed()->count();

                return $data;
                break;
            case "fa":
                $data = Wsfa::whereNull('cm_document_series_no')->withTrashed()->count();

                return $data;
                break;
            case "ma":
                $data = Wsma::whereNull('cm_document_series_no')->withTrashed()->count();

                return $data;
                break;
            case "sc":
                $data = ServiceCall::withTrashed()->count();

                return $data;
                break;
            case "mr":
                $data = Memorandum::withTrashed()->count();

                return $data;
                break;
            default:
                return 'test';
        }
    }

    // Get document count
    public static function getCountCM($documentCode)
    {
        $unique = Str::lower($documentCode);

        switch ($unique) {
            case "mi":

                $data = Wsmi::whereNotNull('cm_document_series_no')->withTrashed()->count();

                return $data;
                break;
            case "mro":
                $data = Wsmro::whereNotNull('cm_document_series_no')->withTrashed()->count();

                return $data;
                break;
            case "dm":
                $data = Wsdm::whereNotNull('cm_document_series_no')->withTrashed()->count();

                return $data;
                break;
            case "fg":
                $data = Wsfg::whereNotNull('cm_document_series_no')->withTrashed()->count();

                return $data;
                break;
            case "fa":
                $data = Wsfa::whereNotNull('cm_document_series_no')->withTrashed()->count();

                return $data;
                break;
            case "ma":
                $data = Wsma::whereNotNull('cm_document_series_no')->withTrashed()->count();

                return $data;
                break;
            case "sc":
                $data = ServiceCall::withTrashed()->count();

                return $data;
                break;
            case "mr":
                $data = Memorandum::withTrashed()->count();

                return $data;
                break;
            default:
                return 'test';
        }
    }

    // Get document full details
    public static function getDocument($data)
    {
        $splice = Str::of($data)->explode('-');
        $unique = Str::lower($splice[1]);

        // $data = substr($data, 4);

        switch ($unique) {
            case "mi":
                $data = Wsmi::with('items')->DocumentSeries($data)->first();

                return $data;
                break;
            case "mro":
                $data = Wsmro::with('items')->DocumentSeries($data)->first();

                return $data;
                break;
            case "dm":
                $data = Wsdm::with('items')->DocumentSeries($data)->first();

                return $data;
                break;
            case "fg":
                $data = Wsfg::with('items')->DocumentSeries($data)->first();

                return $data;
                break;
            case "fa":
                $data = Wsfa::with('items')->DocumentSeries($data)->first();

                return $data;
                break;
            case "ma":
                $data = Wsma::with('items')->DocumentSeries($data)->first();

                return $data;
                break;
            case "sc":
                $data = ServiceCall::with('items')->DocumentSeries($data)->first();

                return $data;
                break;
            case "mr":
                $data = Memorandum::with('items')->DocumentSeries($data)->first();

                return $data;
                break;
            case "rs":
                $data = ReturnSlip::with('items')->DocumentSeries($data)->first();

                return $data;
                break;
            default:
                return 'No Result Found';
        }
    }

    public static function getModelPath($data)
    {
        switch (Str::lower($data)) {
            case "mi":
                return 'App\Models\Form\WithdrawalSlip\Wsmi';
            case "mro":
                return 'App\Models\Form\WithdrawalSlip\Wsmro';
            case "dm":
                return 'App\Models\Form\WithdrawalSlip\Wsdm';
            case "fg":
                return 'App\Models\Form\WithdrawalSlip\Wsfg';
            case "fa":
                return 'App\Models\Form\WithdrawalSlip\Wsfa';
            case "ma":
                return 'App\Models\Form\WithdrawalSlip\Wsma';
            case "sc":
                return 'App\Models\Form\ServiceCall';
            case "mr":
                return 'App\Models\Form\Memorandum';
            case "rs":
                return 'App\Models\Form\ReturnSlip\ReturnSlip';
            default:
                return 'No Result Found';
        }
    }

    // Create model short name
    public static function getDocumentShortName($document_series_no)
    {
        try {
            $splice = Str::of($document_series_no)->explode('-');
            return Str::lower($splice[1]);
            
        } catch (Exception $exception) {
            Log::error($exception);
        }
    }

    // Generate Link for the document
    public static function getDocumentUrnShow($short_name)
    {
        switch (Str::lower($short_name)) {
            case "mi":
                return 'merchandise/show/';
            case "mro":
                return 'maintenance/show/';
            case "dm":
                return 'directmaterial/show/';
            case "fg":
                return 'finishedgoods/show/';
            case "fa":
                return 'fixedasset/show/';
            case "ma":
                return 'minorasset/show/';
            case "sc":
                return 'servicecall/show/';
            case "mr":
                return 'memorandum/show/';
            case "rs":
                return 'returnitem/show/';
            default:
                Log::warning('Cannot find Document URN for ' . $short_name);
                return 'No Result Found';
        }
    }
    
    // Check if the document series no has any approval department exists
    public static function has_approval($document_series_no)
    {
        $approval = Approval::DocumentSeries($document_series_no)->exists();

        if($approval) {
            return true;
        }
        return false;
    }

    // Check if approval department is still pending for entries.
    public static function approval_allow_entries($document_series_no)
    {

        // Check first the document series status
        $document = self::getDocument($document_series_no);
        
        // If document is empty or not found
        if(empty($document))
        {
            return abort(404);
        }

        if(in_array(strtolower($document->status), ['closed', 'archived'])) {
            return "Document $document_series_no status is already closed or archived.";
        }

        $approval = self::has_approval($document_series_no);

        if(!$approval) {
            return "Document $document_series_no doesn't have any approval department.";
        }

        // Check if document series approval has any department need to fullfill
        $approval_count = Approval::DocumentSeries($document_series_no)->where('handed_person', null)->count();

        if($approval_count == 0) {
            return "All department has been fullfilled.";
        }

        return true;
    }

    // Check if approval department has been fullfill

    public static function check_approval_department_fullfillment($document_series_no)
    {
        // Check if document series approval has any department need to fullfill
        $approval_count = Approval::DocumentSeries($document_series_no)->where('handed_person', null)->count();

        if($approval_count == 0) {

            $model = DocumentService::getDocument($document_series_no);

            $model->update([
                'status' => 'Closed' 
            ]);

            //Get Document Short Name
            $short_name = self::getDocumentShortName($document_series_no);

            // Generate Link

            // Fire notification to alert administrators that the form has been closed
            NotificationService::notifyAdministrator(self::getDocumentUrnShow($short_name).$model->id, $model->document_series_no, 'Document has been closed.');

            // Get Document Model Path
            $model_path = self::getModelPath($short_name);

            // Update form statistic
            DashboardService::update_form_statistic($model_path, $short_name);
        }
    }

}
