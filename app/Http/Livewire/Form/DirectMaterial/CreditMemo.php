<?php

namespace App\Http\Livewire\Form\DirectMaterial;

use App\Events\PDF\DMCreditMemo;
use App\Services\DocumentService;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Throwable;
use Event;

class CreditMemo extends Component
{
    public $document_series_no, $withdrawal_document_series_no;
    public $code, $description, $qty, $uom, $remarks;
    public $customer_name, $production_order_no, $product_name;
    public $noted_by, $prepared_by, $approved_by, $checked_by, $requested_by, $released_by, $received_by;
    public $noted_by_position, $prepared_by_position, $approved_by_position, $checked_by_position, $requested_by_position, $released_by_position, $received_by_position;
    public $updateMode = false;
    public $inputs = [];

    public $i = 1;

    protected $model = 'App\Models\Form\WithdrawalSlip\Wsdm';
    protected $item_model = 'App\Models\Form\Item\DmItem';

    public function render()
    {
        return view('livewire.form.direct-material.credit-memo', [
            'title' => 'Direct Material Credit Memo'
        ])->layout('layouts.tabler.app');
    }

    public function mount()
    {
        array_push($this->inputs, 1);
        $this->document_series_no = DocumentService::GenerateSeriesNoForCM('RRFC', 'DM', true);
    }

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs, $i);
    }

    public function remove($i)
    {
        unset($this->inputs[$i],$this->code[$i+1],$this->description[$i+1],$this->qty[$i+1],$this->uom[$i+1],$this->remarks[$i+1]);
    }

    public function rules() 
    {
        return [
            'customer_name'         => 'required',
            'production_order_no'   => 'nullable',
            'product_name'          => 'nullable',
            'code.*'                => 'required',
            'description.*'         => 'required',
            'qty.*'                 => 'required|numeric',
            'uom.*'                 => 'required',
            'remarks.*'             => 'nullable',
            
            'prepared_by'           => 'nullable',
            'prepared_by_position'  => 'nullable',
            'checked_by'            => 'nullable',
            'checked_by_position'   => 'nullable',
            'noted_by'              => 'nullable',
            'noted_by_position'     => 'nullable',
            'approved_by'           => 'nullable',
            'approved_by_position'  => 'nullable',
            'requested_by'          => 'nullable',
            'requested_by_position' => 'nullable',
            'released_by'           => 'nullable',
            'released_by_position'  => 'nullable',
            'received_by'           => 'nullable',
            'received_by_position'  => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'code.*.required'            => "Code is required",
            'description.*.required'     => "Description cannot be blank",
            'qty.*.required'             => "Please input qty",
            'qty.*.numeric'              => "The value must be numbers",
            'uom.*.required'             => "Uom cannot be blank",
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        $this->validate();

        try {

            DB::beginTransaction();

            $data = $this->model::create([
                'document_series_no'    => $this->withdrawal_document_series_no,
                'cm_document_series_no' => $this->document_series_no,
                'customer_name'         => $this->customer_name,
                'order_no'              => $this->production_order_no,
                'product_name'          => $this->product_name,
                
                'prepared_by'           => $this->prepared_by,
                'prepared_by_position'  => $this->prepared_by_position,
                'checked_by'            => $this->checked_by,
                'checked_by_position'   => $this->checked_by_position,
                'noted_by'              => $this->noted_by,
                'noted_by_position'     => $this->noted_by_position,
                'approved_by'           => $this->approved_by,
                'approved_by_position'  => $this->approved_by_position,
                'requested_by'          => $this->requested_by,
                'requested_by_position' => $this->requested_by_position,
                'released_by'           => $this->released_by,
                'released_by_position'  => $this->released_by_position,
                'received_by'           => $this->received_by,
                'received_by_position'  => $this->received_by_position,
            ]);

            foreach ($this->code as $key => $item) {
                $this->item_model::create([
                    'wsdm_id'               => $data->id,
                    'item_code'             => $this->code[$key],
                    'item_description'      => $this->description[$key],
                    'qty'                   => $this->qty[$key],
                    'uom'                   => $this->uom[$key],
                    'remarks'               => $this->remarks[$key] ?? ''
                ]);
            }

            DB::commit();

            Event::dispatch(new DMCreditMemo($data));

            $this->reset(); // Reset all properties

            return redirect()->route('dm.show', $data);

        } catch (Exception $exception) {

            DB::rollback();

            Log::error($exception);

        } catch (Throwable $throwable) {
            DB::rollback();

            Log::error($throwable);
        }
    }
}
