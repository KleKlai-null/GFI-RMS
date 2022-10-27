<?php

namespace App\Http\Livewire\Form\Memorandum;

use App\Services\DocumentService;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Throwable;

class Create extends Component
{
    public $document_series_no;

    public $id_no, $name_of_employee, $department, $section, $asset_code, $asset_type, $asset_description, $asset_serial_no, $asset_value;
    public $noted_by, $prepared_by, $approved_by, $checked_by, $released_by, $received_by;
    public $updateMode = false;

    protected $model = 'App\Models\Form\Memorandum';

    public function mount()
    {
        $this->document_series_no = DocumentService::GenerateSeriesNo('GFI', 'MR');
    }

    public function render()
    {
        return view('livewire.form.memorandum.create', [
            'title' => 'Memorandum Receipt'
        ])->layout('layouts.tabler.app');
    }

    public function rules() 
    {
        return [
            'id_no'                     => 'required',
            'name_of_employee'          => 'required',
            'department'                => 'required',
            'section'                   => 'required',
            'asset_code'                => 'required',
            'asset_type'                => 'required',
            'asset_description'         => 'required',
            'asset_serial_no'           => 'required',
            'asset_value'               => 'required',

            'noted_by'                  => 'required',
            'prepared_by'               => 'required',
            'approved_by'               => 'required',
            'checked_by'                => 'required',
            'released_by'               => 'required',
            'received_by'               => 'required',
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

            return redirect()->route('mr.show', $data);

        } catch (Exception $exception) {

            Log::error($exception);

        } catch (Throwable $throwable) {

            Log::error($throwable);
        }
    }
}