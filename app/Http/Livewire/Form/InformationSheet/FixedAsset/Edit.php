<?php

namespace App\Http\Livewire\Form\InformationSheet\FixedAsset;

use Livewire\Component;
use App\Models\InformationSheet\FixedAsset\FixedAsset;
use App\Services\DocumentService;

class Edit extends Component
{
    public $data;
    public $revision_number;

    public function render()
    {
        return view('livewire.form.information-sheet.fixed-asset.edit', [
            'title' => 'Fixed Asset Sheet'
        ])->layout('layouts.tabler.app');
    }

    public function mount(FixedAsset $data){

        $this->data = $data;
        $this->revision_number = DocumentService::generateRevisionNumber($this->data->document_series_no,'FA');

    }
}
