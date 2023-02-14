<?php

namespace App\Http\Livewire\Form\ServiceCall;

use App\Services\DocumentService;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Throwable;

class Create extends Component
{
    public $document_series_no;

    public $customer_name, $contact_person, $phone_no, $item_no, $description, $mfr_serial_no, $serial_no;
    public $subject, $origin, $problem_type, $assigned_to, $priority, $call_type, $technician, $remarks, $resolution;
    public $noted_by, $prepared_by, $approved_by, $checked_by, $requested_by, $released_by, $received_by;
    public $noted_by_position, $prepared_by_position, $approved_by_position, $checked_by_position, $requested_by_position, $released_by_position, $received_by_position;
    public $updateMode = false;

    protected $model = 'App\Models\Form\ServiceCall';

    public function mount()
    {
        $this->document_series_no = DocumentService::GenerateSeriesNo('RRFC', 'SC');
    }

    public function render()
    {
        return view('livewire.form.service-call.create', [
            'title' => 'Service Call'
        ])->layout('layouts.tabler.app');
    }

    public function rules() 
    {
        return [
            'customer_name'             => 'required',
            'contact_person'            => 'required',
            'phone_no'                  => 'required',
            'item_no'                   => 'required',
            'description'               => 'required',
            'mfr_serial_no'             => 'nullable',
            'serial_no'                 => 'nullable',
            'subject'                   => 'required',
            'origin'                    => 'required',
            'problem_type'              => 'required',  
            'assigned_to'               => 'required',
            'priority'                  => 'required',
            'call_type'                 => 'nullable',
            'technician'                => 'nullable',
            'remarks'                   => 'nullable',
            'resolution'                => 'nullable',

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

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        $this->validate();

        try {

            DB::beginTransaction();

            $data = $this->model::create($this->validate());

            DB::commit();

            $this->reset(); // Reset all properties

            return redirect()->route('sc.show', $data);

        } catch (Exception $exception) {

            Log::error($exception);

        } catch (Throwable $throwable) {

            Log::error($throwable);
        }
    }
}
