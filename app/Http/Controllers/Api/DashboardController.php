<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\WsmiResource;
use Illuminate\Http\Request;
use App\Models\Form\Memorandum;
use App\Models\Form\ServiceCall;
use App\Models\Form\WithdrawalSlip\Wsdm;
use App\Models\Form\WithdrawalSlip\Wsfa;
use App\Models\Form\WithdrawalSlip\Wsfg;
use App\Models\Form\WithdrawalSlip\Wsma;
use App\Models\Form\WithdrawalSlip\Wsmi;
use App\Models\Form\WithdrawalSlip\Wsmro;
use Exception;
use Throwable;

class DashboardController extends ApiController
{
    public function __construct()
    {
        $this->middleware(['role:administrator']);
    }

    public function dashboard_form_count()
    {
        $mi = Wsmi::count();
        $mro = Wsmro::count();
        $dm = Wsdm::count();
        $fa = Wsfa::count();
        $fg = Wsfg::count();
        $ma = Wsma::count();
        $memorandum = Memorandum::count();
        $servicecall = ServiceCall::count();

        return response()->json([
            'success'   => true,
            'data'      => [
                'miCount'            => $mi,
                'mroCount'           => $mro,
                'dmCount'            => $dm,
                'faCount'            => $fa,
                'fgCount'            => $fg,
                'maCount'            => $ma,
                'memorandumCount'    => $memorandum,
                'servicecallCount'   => $servicecall
            ]
        ]);
    }

    public function all_form_with_status(Request $request) 
    {
        try {
            $data = Wsmi::with('items')->where('status', $request->status)->get();
            return $this->sendResponse(WsmiResource::collection($data));
        } catch (Throwable $exception) {
            return $this->sendError($exception);
        }
    }
}
