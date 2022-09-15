<?php

namespace App\Observers\Form\ReturnSlip;

use App\Models\Form\ReturnSlip\ReturnSlip;
use App\Services\NotificationService;

class ReturnSlipObserver
{
    public $afterCommit = true;

    public function created(ReturnSlip $returnSlip)
    {
        NotificationService::notifyAdministrator("returnitem/show/".$returnSlip->id, $returnSlip->document_series_no, 'Created return slip record');

        activity()
        ->performedOn($returnSlip)
        ->causedBy(auth()->user())
        ->event('Created')
        ->withProperties([
            'http_method'            => 'POST',
            'document_series_number' => $returnSlip->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
        ])
        ->log('successfully created return slip record');
    }

    public function retrieved(ReturnSlip $returnSlip)
    {
        //
    }

    /**
     * Handle the ReturnSlip "updated" event.
     *
     * @param  \App\Models\Form\ReturnSlip\ReturnSlip  $returnSlip
     * @return void
     */
    public function updated(ReturnSlip $returnSlip)
    {
        //
    }

    /**
     * Handle the ReturnSlip "deleted" event.
     *
     * @param  \App\Models\Form\ReturnSlip\ReturnSlip  $returnSlip
     * @return void
     */
    public function deleted(ReturnSlip $returnSlip)
    {
        activity()
        ->performedOn($returnSlip)
        ->causedBy(auth()->user())
        ->event('Deleted')
        ->withProperties([
            'http_method'            => 'POST',
            'document_series_number' => $returnSlip->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log($returnSlip->document_series_no . ' return slip has been deleted');
    }

    /**
     * Handle the ReturnSlip "restored" event.
     *
     * @param  \App\Models\Form\ReturnSlip\ReturnSlip  $returnSlip
     * @return void
     */
    public function restored(ReturnSlip $returnSlip)
    {
        activity()
        ->performedOn($returnSlip)
        ->causedBy(auth()->user())
        ->event('Restored')
        ->withProperties([
            'http_method'            => 'GET',
            'document_series_number' => $returnSlip->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log('successfuly restored return slip ' . $returnSlip->document_series_no);
    }

    /**
     * Handle the ReturnSlip "force deleted" event.
     *
     * @param  \App\Models\Form\ReturnSlip\ReturnSlip  $returnSlip
     * @return void
     */
    public function forceDeleted(ReturnSlip $returnSlip)
    {
        activity()
        ->performedOn($returnSlip)
        ->causedBy(auth()->user())
        ->event('Permanent Deleted')
        ->withProperties([
            'http_method'            => 'POST',
            'document_series_number' => $returnSlip->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log($returnSlip->document_series_no . ' return slip permanently deleted');
    }
}
