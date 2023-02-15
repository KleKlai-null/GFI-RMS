<?php

namespace App\Listeners;

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

class FormCreditMemoListener implements ShouldQueue
{
    public function mi(Form\MICreditMemo $event)
    {
        $filename = $event->data->cm_document_series_no . '.pdf';
        $this->exportPDF($event->data, 'mi', $filename);
    }

    public function mro(Form\MROCreditMemo $event)
    {
        $filename = $event->data->cm_document_series_no . '.pdf';
        $this->exportPDF($event->data, 'mro', $filename);
    }

    public function dm(Form\DMCreditMemo $event)
    {
        $filename = $event->data->cm_document_series_no . '.pdf';
        $this->exportPDF($event->data, 'dm', $filename);
    }

    public function fg(Form\FGCreditMemo $event)
    {
        $filename = $event->data->cm_document_series_no . '.pdf';
        $this->exportPDF($event->data, 'fg', $filename);
    }

    public function fa(Form\FACreditMemo $event)
    {
        $filename = $event->data->cm_document_series_no . '.pdf';
        $this->exportPDF($event->data, 'fa', $filename);
    }

    public function ma(Form\MACreditMemo $event)
    {
        $filename = $event->data->cm_document_series_no . '.pdf';
        $this->exportPDF($event->data, 'ma', $filename);
    }


    public function exportPDF($event, $type, $filename)
    {
        // Log::info($event->document_series_no . ' has been created');
        Log::info('PDF has been disabled for ' . $event->cm_document_series_no);

        $data = $event;

        try {

            ini_set('max_execution_time', 300);

            // Create QR hash
            $qrcode = base64_encode(QrCode::format('svg')->size(110)->errorCorrection('H')->generate(config('app.url').'/verify/key='.$event->cm_document_series_no));

            // Visit form pdf to generate
            $pdf = Pdf::loadView('forms.pdf.cm.'.$type, compact('qrcode', 'data'))->setPaper('portrait');
            $content = $pdf->download()->getOriginalContent();

            // Put to local disk
            Storage::disk('local')->put('pdf/'.$filename, $content);

            $event->addMediaFromDisk('pdf/'.$filename, 'local')->preservingOriginal()->toMediaCollection('pdf');

            Log::info($event->cm_document_series_no . ' pdf successfully generated.');

        } catch (Exception $exception) {
            Log::error($exception);
        } catch (Throwable $throwable) {
            Log::error($throwable);
        }
    }
}

