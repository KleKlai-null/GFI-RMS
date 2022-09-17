<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Http\Livewire\Form\Trait\WithSorting;
use App\Models\Form\WithdrawalSlip\Wsmi;

class TableAdmin extends Component
{
    use WithSorting;

    public $search = '';
    public $status = 'Open';

    public function render()
    {
        $datas = Wsmi::search('document_series_no', '%'.$this->search.'%')->where('status', $this->status)->orderBy('id', 'desc')->paginate(5);

        return view('livewire.dashboard.table-admin',[
            'datas'  => $datas
        ]);
    }
}
