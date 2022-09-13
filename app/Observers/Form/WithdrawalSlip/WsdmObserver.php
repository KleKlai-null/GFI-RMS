<?php

namespace App\Observers\Form\WithdrawalSlip;

use App\Models\Form\WithdrawalSlip\Wsdm;

class WsdmObserver
{
    public $afterCommit = true;

    public function created(Wsdm $wsdm)
    {
        cache()->forget('wsdm-data');
        cache()->forget('activitylog-data');

        activity()
        ->performedOn($wsdm)
        ->causedBy(auth()->user())
        ->event('Created')
        ->withProperties([
            'http_method'            => 'POST',
            'document_series_number' => $wsdm->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
        ])
        ->log('successfully created direct material record');
    }

    public function retrieved(Wsdm $wsdm)
    {
        //
    }

    /**
     * Handle the Wsdm "updated" event.
     *
     * @param  \App\Models\Form\WithdrawalSlip\Wsdm  $wsdm
     * @return void
     */
    public function updated(Wsdm $wsdm)
    {
        //
    }

    /**
     * Handle the Wsdm "deleted" event.
     *
     * @param  \App\Models\Form\WithdrawalSlip\Wsdm  $wsdm
     * @return void
     */
    public function deleted(Wsdm $wsdm)
    {
        activity()
        ->performedOn($wsdm)
        ->causedBy(auth()->user())
        ->event('Deleted')
        ->withProperties([
            'http_method'            => 'POST',
            'document_series_number' => $wsdm->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log($wsdm->document_series_no . ' has been deleted');
    }

    /**
     * Handle the Wsdm "restored" event.
     *
     * @param  \App\Models\Form\WithdrawalSlip\Wsdm  $wsdm
     * @return void
     */
    public function restored(Wsdm $wsdm)
    {
        activity()
        ->performedOn($wsdm)
        ->causedBy(auth()->user())
        ->event('Restored')
        ->withProperties([
            'http_method'            => 'POST',
            'document_series_number' => $wsdm->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log('successfuly restored' . $wsdm->document_series_no);
    }

    /**
     * Handle the Wsdm "force deleted" event.
     *
     * @param  \App\Models\Form\WithdrawalSlip\Wsdm  $wsdm
     * @return void
     */
    public function forceDeleted(Wsdm $wsdm)
    {
        activity()
        ->performedOn($wsdm)
        ->causedBy(auth()->user())
        ->event('Permanent Deleted')
        ->withProperties([
            'http_method'            => 'POST',
            'document_series_number' => $wsdm->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log($wsdm->document_series_no . ' permanently deleted');
    }
}
