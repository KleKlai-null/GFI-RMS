<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class Table extends Component
{
    public $search;
    
    public function render()
    {
        return view('livewire.dashboard.table');
    }
}
