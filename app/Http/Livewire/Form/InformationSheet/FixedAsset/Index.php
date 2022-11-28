<?php

namespace App\Http\Livewire\Form\InformationSheet\FixedAsset;

use Livewire\Component;
use Livewire\WithPagination;
class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $model = 'App\Models\InformationSheet\FixedAsset\FixedAsset';
    public function render()
    {
        $data = $this->model::paginate(6);
        return view('livewire.form.information-sheet.fixed-asset.index', [
            'title' => 'Fixed Asset Sheet',
            'datas' => $data,
        ])->layout('layouts.tabler.app');
    }
}
