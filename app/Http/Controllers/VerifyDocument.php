<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form\Memorandum;
use App\Models\Form\ReturnSlip\ReturnSlip;
use App\Models\Form\ServiceCall;
use App\Models\Form\WithdrawalSlip\Wsdm;
use App\Models\Form\WithdrawalSlip\Wsfa;
use App\Models\Form\WithdrawalSlip\Wsfg;
use App\Models\Form\WithdrawalSlip\Wsma;
use App\Models\Form\WithdrawalSlip\Wsmi;
use App\Models\Form\WithdrawalSlip\Wsmro;
use Exception;
use Illuminate\Support\Str;

class VerifyDocument extends Controller
{
    public function verify_document($document_series_no)
    {
        //Check Document Series Number

        try {
            $splice = Str::of($document_series_no)->explode('-');
            $unique = Str::lower($splice[1]);

            $authentic = true;

            switch ($unique) {
                case "mi":
                    $data = Wsmi::DocumentSeries($document_series_no)->select('document_series_no', 'created_at')->first();
                    
                    if(!$data) {
                        return abort(500);
                    }

                    return view('verify.index', compact('data', 'authentic'));
                case "mro":
                    $data = Wsmro::with('items')->DocumentSeries($document_series_no)->first();

                    if(!$data) {
                        return abort(500);
                    }

                    return view('verify.index', compact('data', 'authentic'));
                case "dm":
                    $data = Wsdm::with('items')->DocumentSeries($document_series_no)->first();

                    if(!$data) {
                        return abort(500);
                    }

                    return view('verify.index', compact('data', 'authentic'));
                case "fg":
                    $data = Wsfg::with('items')->DocumentSeries($document_series_no)->first();

                    if(!$data) {
                        return abort(500);
                    }

                    return view('verify.index', compact('data', 'authentic'));
                case "fa":
                    $data = Wsfa::with('items')->DocumentSeries($document_series_no)->first();

                    if(!$data) {
                        return abort(500);
                    }

                    return view('verify.index', compact('data', 'authentic'));
                case "ma":
                    $data = Wsma::with('items')->DocumentSeries($document_series_no)->first();

                    if(!$data) {
                        return abort(500);
                    }

                    return view('verify.index', compact('data', 'authentic'));
                case "sc":
                    $data = ServiceCall::DocumentSeries($document_series_no)->first();

                    if(!$data) {
                        return abort(500);
                    }

                    return view('verify.index', compact('data', 'authentic'));
                case "mr":
                    $data = Memorandum::DocumentSeries($document_series_no)->first();

                    if(!$data) {
                        return abort(500);
                    }

                    return view('verify.index', compact('data', 'authentic'));
                case "rs":
                    $data = ReturnSlip::with('items')->DocumentSeries($document_series_no)->first();

                    if(!$data) {
                        return abort(500);
                    }
                    
                    return view('verify.index', compact('data', 'authentic'));
                default:
                    $authentic = false;
                    return view('verify.index', compact('data', 'authentic'));
            }

        } catch (Exception $exception) {

            $authentic = false;
            return view('verify.index', compact('document_series_no', 'authentic'));
        }
    }
}
