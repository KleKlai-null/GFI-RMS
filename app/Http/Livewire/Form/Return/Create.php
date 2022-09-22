<?php

namespace App\Http\Livewire\Form\Return;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Throwable;
use Illuminate\Support\Str;

class Create extends Component
{
    public $code, $description, $qty, $uom, $reason;
    public $department, $memorandum_no;
    public $withdrawal_slip_no = '';
    public $noted_by, $prepared_by, $approved_by, $checked_by, $released_by, $received_by;

    public $model = 'App\Models\Form\ReturnSlip\ReturnSlip';
    protected $item_model = 'App\Models\Form\Item\ReturnItem';

    public $updateMode = false;
    public $inputs = [];

    public $i = 1;
    
    public function mount($withdrawal_slip_no = null)
    {
        $this->withdrawal_slip_no = $withdrawal_slip_no;
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

    public function render()
    {
        return view('livewire.form.return.create', [
            'title' => 'Return Items'
        ])->layout('layouts.tabler.app');
    }

    public function rules()
    {
        return [
            'department'            => 'required',
            'memorandum_no'         => 'required',
            'withdrawal_slip_no'    => 'required',
            'code.*'                => 'required',
            'description.*'         => 'required',
            'qty.*'                 => 'required|numeric',
            'uom.*'                 => 'required',
            'reason.*'              => 'nullable',
            'noted_by'              => 'required',
            'prepared_by'           => 'required',
            'approved_by'           => 'required',
            'checked_by'            => 'required',
            'released_by'           => 'required',
            'received_by'           => 'required',
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

    public function store()
    {
        $this->validate();

        try {

            DB::beginTransaction();

            $data = $this->model::create([
                'withdrawal_form'       => $this->identify_form_by_withdrawal_slip_no($this->withdrawal_slip_no) ?? 'Unknown',
                'department'            => $this->department,
                'mr_no'                 => $this->memorandum_no,
                'withdrawal_slip_no'    => $this->withdrawal_slip_no,
                'noted_by'              => $this->noted_by,
                'prepared_by'           => $this->prepared_by,
                'approved_by'           => $this->approved_by,
                'checked_by'            => $this->checked_by,
                'released_by'           => $this->released_by,
                'received_by'           => $this->received_by
            ]);

            foreach ($this->code as $key => $item) {
                $this->item_model::create([
                    'return_slip_id'        => $data->id,
                    'item_code'             => $this->code[$key],
                    'item_description'      => $this->description[$key],
                    'qty'                   => $this->qty[$key],
                    'uom'                   => $this->uom[$key],
                    'reason'                => $this->reason[$key] ?? ''
                ]);
            }
            
            DB::commit();

            $this->reset(); // Reset all properties

            return redirect()->route('rs.show', $data);

        } catch (Exception $exception) {

            DB::rollback();
            Log::error($exception);

        } catch (Throwable $throwable) {

            DB::rollback();
            Log::critical($throwable);

        }

    }

    public function identify_form_by_withdrawal_slip_no($document_series_no)
    {
        try {
            $splice = Str::of($document_series_no)->explode('-');
            $unique = Str::lower($splice[1]);
    
            switch($unique) {
                case "mi":
                    return 'Merchandise';
                    break;
                case "mro":
                    return 'Maintenance, Repairs, Operations';
                    break;
                case "dm":
                    return 'Direct Material';
                    break;
                case "fg":
                    return 'Finished Goods';
                    break;
                case "fa":
                    return 'Fixed Asset';
                    break;
                case "ma":
                    return 'Minor Asset';
                    break;
                case "sc":
                    return 'Service Call';
                    break;
                case "mr":
                    return 'Memorandum';
                    break;
                default:
                    return 'Unknown';
            }
        } catch (Exception $exception) {
            Log::error($exception);
        } catch (Throwable $throwable) {
            Log::error($throwable);
        }
    }
}
