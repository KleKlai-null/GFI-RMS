<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Pdf extends Component
{
    public $title, $data;
    public $has_serial = false; // Check if the form item is serial or uom (unit of measure)
    
    public function __construct($title, $data)
    {
        $this->title = $title;
        $this->data = $data;

        // Check if the model has relationship item
        if(!empty($data->items)) {
            // Check if item has UOM or Serial
            $this->has_serial = (empty($data->items->first()->uom)) ? true : false;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.pdf', [
            'title'             => $this->title,
            'data'              => $this->data,
            'has_serial'        => $this->has_serial,
        ]);
    }
}
