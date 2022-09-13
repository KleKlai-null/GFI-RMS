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
    public $noted_by, $prepared_by, $approved_by, $checked_by, $released_by;
    public $updateMode = false;

    protected $model = 'App\Models\Form\ServiceCall';

    public function mount()
    {
        $this->document_series_no = DocumentService::GenerateSeriesNo('GFI', 'SC');
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

            'noted_by'                  => 'required',
            'prepared_by'               => 'required',
            'approved_by'               => 'required',
            'checked_by'                => 'nullable',
            'released_by'               => 'nullable',
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

        } catch (Exception $exception) {

            Log::error($exception);

        } catch (Throwable $throwable) {

            Log::error($throwable);
        }

        $this->reset(); // Reset all properties

        return redirect()->route('sc.show', $data);
    }
}