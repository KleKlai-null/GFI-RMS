<?php

namespace App\Listeners;

use App\Events\PDF as Form;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;
use Exception;
use Throwable;

class InformationSheet implements ShouldQueue
{

    public function bp(Form\bpinformationsheet $event)
    {
        $filename = $event->data->document_series_no . '.pdf';
        $this->exportPDF($event->data, 'bp', $filename);
    }

    public function fixedAsset(Form\fixedassetinformationsheet $event)
    {
        $filename = $event->data->document_series_no . '.pdf';
        $this->exportPDF($event->data, 'fa-is', $filename);
    }

    public function item(Form\iteminformormationsheet $event)
    {
        $filename = $event->data->document_series_no . '.pdf';
        $this->exportPDF($event->data, 'item', $filename);
    }

    public function exportPDF($event, $type, $filename)
    {
        // Log::info($event->document_series_no . ' has been created');
        Log::info('PDF has been disabled for ' . $event->document_series_no);

        $data = $event;

        try {

            ini_set('max_execution_time', 300);

            // Visit form pdf to generate
            $pdf = Pdf::loadView('forms.pdf.'.$type, compact('data'))->setPaper('portrait');
            $content = $pdf->download()->getOriginalContent();
            
            // Put to local disk
            Storage::disk('local')->put('pdf/'.$filename, $content);  

            $event->addMediaFromDisk('pdf/'.$filename, 'local')->preservingOriginal()->toMediaCollection('pdf');

            Log::info($event->document_series_no . ' pdf successfully generated.');

        } catch (Exception $exception) {
            Log::error($exception);
        } catch (Throwable $throwable) {
            Log::error($throwable);
        }
    }
}
