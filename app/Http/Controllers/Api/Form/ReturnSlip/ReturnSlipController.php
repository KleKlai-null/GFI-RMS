<?php

namespace App\Http\Controllers\Api\Form\ReturnSlip;

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Form\ReturnSlip\ReturnSlipRequest;
use App\Models\Form\Item\ReturnItem;
use App\Models\Form\ReturnSlip\ReturnSlip;
use App\Services\DocumentService;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReturnSlipController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(Request $request)
    {
        try {

            if($request->id){
                $data = ReturnSlip::with('items')->find($request->id)->orderBy('id', 'desc')->get();
    
                return $this->sendResponse($data);
            }

            $unique = Str::lower($request->form);

            $data = ReturnSlip::GetData($unique)->get();

            return $data;

        } catch (Exception $exception) {
            return $this->sendError($exception);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReturnSlipRequest $request)
    {
        try {

            DB::beginTransaction();

            $data = ReturnSlip::create($request->validated());

            foreach ($request->items as $key => $item) {

                if($request->withdrawal_form == 'fa' || $request->withdrawal_form == 'ma')
                {
                    ReturnItem::create([
                        'return_slip_id'        => $data->id,
                        'item_code'             => $item['item_code'],
                        'item_description'      => $item['item_description'],
                        'qty'                   => $item['qty'],
                        'serial_no'             => $item['serial_no'],
                        'reason'                => $item['reason']
                    ]);
                } else {
                    ReturnItem::create([
                        'return_slip_id'        => $data->id,
                        'item_code'             => $item['item_code'],
                        'item_description'      => $item['item_description'],
                        'qty'                   => $item['qty'],
                        'uom'                   => $item['uom'],
                        'reason'                => $item['reason']
                    ]);
                }
            }

            DB::commit();
            
            DocumentService::generatePDF($data, $request->withdrawal_form, true); //Generate PDF for Backup

            return $this->sendResponse($data);

        } catch (Exception $exception) {

            DB::rollback();

            return $this->sendError($exception);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form\ReturnSlip\ReturnSlip  $returnSlip
     * @return \Illuminate\Http\Response
     */
    public function show(ReturnSlip $returnSlip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form\ReturnSlip\ReturnSlip  $returnSlip
     * @return \Illuminate\Http\Response
     */
    public function edit(ReturnSlip $returnSlip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form\ReturnSlip\ReturnSlip  $returnSlip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReturnSlip $returnSlip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form\ReturnSlip\ReturnSlip  $returnSlip
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReturnSlip $returnSlip)
    {
        //
    }
}
