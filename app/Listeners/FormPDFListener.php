<?php

namespace App\Listeners;

use App\Events\Form\MIPDF;
use App\Events\PDF as Form;
use App\Models\Form\WithdrawalSlip\Wsmi;
use App\Services\DocumentService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;
use Exception;
use Throwable;

class FormPDFListener implements ShouldQueue
{

    public function mi(Form\MI $event)
    {
        $filename = $event->data->document_series_no . '.pdf';
        $this->exportPDF($event->data, 'mi', $filename);
    }

    public function mro(Form\MRO $event)
    {
        $filename = $event->data->document_series_no . '.pdf';
        $this->exportPDF($event->data, 'mro', $filename);
    }

    public function dm(Form\DM $event)
    {
        $filename = $event->data->document_series_no . '.pdf';
        $this->exportPDF($event->data, 'dm', $filename);
    }

    public function fg(Form\FG $event)
    {
        $filename = $event->data->document_series_no . '.pdf';
        $this->exportPDF($event->data, 'fg', $filename);
    }

    public function fa(Form\FA $event)
    {
        $filename = $event->data->document_series_no . '.pdf';
        $this->exportPDF($event->data, 'fa', $filename);
    }

    public function ma(Form\MA $event)
    {
        $filename = $event->data->document_series_no . '.pdf';
        $this->exportPDF($event->data, 'ma', $filename);
    }

    public function mr(Form\MR $event)
    {
        $filename = $event->data->document_series_no . '.pdf';
        $this->exportPDF($event->data, 'mr', $filename);
    }

    public function sc(Form\SC $event)
    {
        $filename = $event->data->document_series_no . '.pdf';
        $this->exportPDF($event->data, 'sc', $filename);
    }

    public function rs(Form\RS $event)
    {
        $filename = $event->data->document_series_no . '.pdf';
        $this->exportPDF($event->data, 'rs', $filename);
    }
    

    public function exportPDF($event, $type, $filename)
    {
        // Log::info($event->document_series_no . ' has been created');
        Log::info('PDF has been disabled for ' . $event->document_series_no);

        // $data = $event;

        // try {

        //     ini_set('max_execution_time', 300);

        //     // Create QR hash
        //     $qrcode = base64_encode(QrCode::format('svg')->size(110)->errorCorrection('H')->generate(config('app.url').'/verify/key='.$event->document_series_no));

        //     // Visit form pdf to generate
        //     $pdf = Pdf::loadView('forms.pdf.'.$type, compact('qrcode', 'data'))->setPaper('portrait');
        //     $content = $pdf->download()->getOriginalContent();
            
        //     // Put to local disk
        //     Storage::disk('local')->put('pdf/'.$filename, $content);  

        //     $event->addMediaFromDisk('pdf/'.$filename, 'local')->preservingOriginal()->toMediaCollection('pdf');

        //     Log::info($event->document_series_no . ' pdf successfully generated.');

        // } catch (Exception $exception) {
        //     Log::error($exception);
        // } catch (Throwable $throwable) {
        //     Log::error($throwable);
        // }
    }
}
