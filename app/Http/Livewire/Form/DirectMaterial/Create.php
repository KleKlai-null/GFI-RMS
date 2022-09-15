<?php

namespace App\Http\Livewire\Form\DirectMaterial;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Throwable;

class Create extends Component
{
    public $code, $description, $qty, $uom, $remarks;
    public $purpose, $customer_name, $order_no, $product_name;
    public $noted_by, $prepared_by, $approved_by, $checked_by, $released_by;
    public $updateMode = false;
    public $inputs = [];

    public $i = 1;

    protected $model = 'App\Models\Form\WithdrawalSlip\Wsdm';
    protected $item_model = 'App\Models\Form\Item\DmItem';

    public function render()
    {
        return view('livewire.form.direct-material.create', [
            'title' => 'Direct Material'
        ])->layout('layouts.tabler.app');
    }

    public function mount()
    {
        array_push($this->inputs, 1);
    }

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs, $i);
    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    public function rules() 
    {
        return [
            'purpose'               => 'required',
            'customer_name'         => 'required',
            'order_no'              => 'required',
            'product_name'          => 'required',
            'code.*'                => 'required',
            'description.*'         => 'required',
            'qty.*'                 => 'required|numeric',
            'uom.*'                 => 'required',
            'remarks.*'             => 'nullable',
            'noted_by'              => 'required',
            'prepared_by'           => 'required',
            'approved_by'           => 'required',
            'checked_by'            => 'nullable',
            'released_by'           => 'nullable',
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
                'purpose'               => $this->purpose,
                'customer_name'         => $this->customer_name,
                'order_no'              => $this->order_no,
                'product_name'          => $this->product_name,
                'noted_by'              => $this->noted_by,
                'prepared_by'           => $this->prepared_by,
                'approved_by'           => $this->approved_by,
                'checked_by'            => $this->checked_by,
                'released_by'           => $this->released_by,
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