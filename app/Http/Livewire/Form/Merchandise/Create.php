<?php

namespace App\Http\Livewire\Form\Merchandise;

use App\Models\User;
use App\Notifications\FormCreated;
use App\Services\Notification;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Throwable;

class Create extends Component
{
    public $code, $description, $qty, $uom, $remarks;
    public $customer_name, $pallet_no, $warehouse_location, $warehouse, $profit_center, $sub_profit_center, $sales_order_no;
    public $noted_by, $prepared_by, $approved_by, $checked_by, $released_by;
    public $updateMode = false;
    public $inputs = [];

    public $i = 1;

    public $model = 'App\Models\Form\WithdrawalSlip\Wsmi';
    protected $item_model = 'App\Models\Form\Item\MiItem';

    public function render()
    {
        return view('livewire.form.merchandise.create', [
            'title' => 'Merchandise'
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
            'customer_name'         => 'nullable',
            'pallet_no'             => 'required',
            'warehouse_location'    => 'required',
            'warehouse'             => 'required',
            'profit_center'         => 'nullable',
            'sub_profit_center'     => 'nullable',
            'sales_order_no'        => 'required',
            'code.*'                => 'required',
            'description.*'         => 'required',
            'qty.*'                 => 'required|numeric',
            'uom.*'                 => 'required',
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
                'customer_name'         => $this->customer_name,
                'pallet_no'             => $this->pallet_no,
                'wh_location'           => $this->warehouse_location,
                'warehouse'             => $this->warehouse,
                'profit_center'         => $this->profit_center,
                'sub_profit_center'     => $this->sub_profit_center,
                'sales_order_number'    => $this->sales_order_no,
                'noted_by'              => $this->noted_by,
                'prepared_by'           => $this->prepared_by,
                'approved_by'           => $this->approved_by,
                'checked_by'            => $this->checked_by,
                'released_by'           => $this->released_by,
            ]);

            foreach ($this->code as $key => $item) {
                $this->item_model::create([
                    'wsmi_id'               => $data->id,
                    'item_code'             => $this->code[$key],
                    'item_description'      => $this->description[$key],
                    'qty'                   => $this->qty[$key],
                    'uom'                   => $this->uom[$key],
                    'remarks'               => $this->remarks[$key] ?? ''
                ]);
            }

            DB::commit();

            $this->reset(); // Reset all properties

            return redirect()->route('mi.show', $data);

        } catch (Exception $exception) {

            DB::rollback();

            Log::error($exception);

        } catch (Throwable $throwable) {
            DB::rollback();

            Log::error($throwable);
        }
    }
}