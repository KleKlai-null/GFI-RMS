<?php

namespace App\Http\Controllers\Api\Form\WithdrawalSlip;

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Form\WithdrawalSlip\WsmroRequest;
use App\Http\Resources\WsmroResource;
use App\Models\Form\Item;
use App\Models\Form\Item\MroItem;
use App\Models\Form\WithdrawalSlip\Wsmro;
use App\Services\DocumentService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WsmroController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['role:mro_clerk|administrator']);
    }

    public function index(Request $request)
    {

        try {

            // if ($request->id) {
            //     $data = Wsmro::with('items')->find($request->id)->orderBy('id', 'desc')->first();

            //     return $this->sendResponse($data);
            // }

            // $data = cache()->remember('wsmro-data', 60*60*24, function() {
            //     return Wsmro::GetData()->get();
            // });

            $data = Wsmro::GetData()->get();

            return $this->sendResponse(WsmroResource::collection($data));

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
    public function store(WsmroRequest $request)
    {
        try {

            DB::beginTransaction();

            //Begin

            $data = Wsmro::create($request->validated());

            foreach ($request->items as $key => $item) {
                MroItem::create([
                    'wsmro_id'              => $data->id,
                    'item_code'             => $item['item_code'],
                    'item_description'      => $item['item_description'],
                    'qty'                   => $item['qty'],
                    'uom'                   => $item['uom'],
                    'remarks'               => $item['remarks']
                ]);
            }

            DB::commit();

            DocumentService::generatePDF($data, 'mro'); //Generate PDF for Backup

            return $this->sendResponse($data);
        } catch (Exception $exception) {

            DB::rollback();

            return $this->sendError($exception);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form\WihdrawalSlip\Wsmro  $wsmro
     * @return \Illuminate\Http\Response
     */
    public function show(Wsmro $wsmro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form\WihdrawalSlip\Wsmro  $wsmro
     * @return \Illuminate\Http\Response
     */
    public function edit(Wsmro $wsmro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form\WihdrawalSlip\Wsmro  $wsmro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wsmro $wsmro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form\WihdrawalSlip\Wsmro  $wsmro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wsmro $wsmro)
    {
        //
    }
}
