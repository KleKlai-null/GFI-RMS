<?php

namespace App\Listeners;

use App\Events\Form\MIPDF;
use App\Events\PDF as Form;
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
        $this->exportPDF($event->data, 'mi');
    }

    public function mro(Form\MRO $event)
    {
        $this->exportPDF($event->data, 'mro');
    }

    public function dm(Form\DM $event)
    {
        $this->exportPDF($event->data, 'dm');
    }

    public function fg(Form\FG $event)
    {
        $this->exportPDF($event->data, 'fg');
    }

    public function fa(Form\FA $event)
    {
        $this->exportPDF($event->data, 'fa');
    }

    public function ma(Form\MA $event)
    {
        $this->exportPDF($event->data, 'ma');
    }

    public function mr(Form\MR $event)
    {
        $this->exportPDF($event->data, 'mr');
    }

    public function sc(Form\SC $event)
    {
        $this->exportPDF($event->data, 'sc');
    }

    public function rs(Form\RS $event)
    {
        $this->exportPDF($event->data, 'rs');
    }
    

    public function exportPDF($event, $type)
    {
        Log::info($event->document_series_no . ' has been created');

        $data = $event;

        try {

            // Create QR hash
            $qrcode = base64_encode(QrCode::format('svg')->size(110)->errorCorrection('H')->generate(config('app.url').'/verify/key='.$event->document_series_no));

            // Visit form pdf to generate
            $pdf = Pdf::loadView('forms.pdf.'.$type, compact('qrcode', 'data'))->setPaper('portrait');
            $content = $pdf->download()->getOriginalContent();
            
            // Set filename 
            $file_name = 'bak/pdf/'.$event->document_series_no.'-'.now()->format('His').'.pdf';

            Log::info($event);
            
            DocumentService::set_document_file_name($event->document_series_no, $file_name);

            // Put to local dist 
            Storage::disk('local')->put($file_name, $content);

            Log::info('PDF successfully generated and downloaded');

        } catch (Exception $exception) {
            Log::error($exception);
        } catch (Throwable $throwable) {
            Log::error($throwable);
        }

        return true;
    }
}
