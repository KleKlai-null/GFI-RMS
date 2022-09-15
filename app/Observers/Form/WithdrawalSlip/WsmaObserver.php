<?php

namespace App\Observers\Form\WithdrawalSlip;

use App\Models\Form\WithdrawalSlip\Wsma;
use App\Services\NotificationService;

class WsmaObserver
{
    public $afterCommit = true;

    public function created(Wsma $wsma)
    {
        cache()->forget('wsma-data');
        cache()->forget('activitylog-data');

        NotificationService::notifyAdministrator("minorasset/show/".$wsma->id, $wsma->document_series_no, 'Created minor asset record');

        activity()
        ->performedOn($wsma)
        ->causedBy(auth()->user())
        ->event('Created')
        ->withProperties([
            'http_method'            => 'POST',
            'document_series_number' => $wsma->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
        ])
        ->log('successfully created minor asset record');
    }

    public function retrieved(Wsma $wsma)
    {
        //
    }

    /**
     * Handle the Wsma "updated" event.
     *
     * @param  \App\Models\Form\WithdrawalSlip\Wsma  $wsma
     * @return void
     */
    public function updated(Wsma $wsma)
    {
        //
    }

    /**
     * Handle the Wsma "deleted" event.
     *
     * @param  \App\Models\Form\WithdrawalSlip\Wsma  $wsma
     * @return void
     */
    public function deleted(Wsma $wsma)
    {
        activity()
        ->performedOn($wsma)
        ->causedBy(auth()->user())
        ->event('Deleted')
        ->withProperties([
            'http_method'            => 'POST',
            'document_series_number' => $wsma->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log($wsma->document_series_no . ' minor asset has been deleted');
    }

    /**
     * Handle the Wsma "restored" event.
     *
     * @param  \App\Models\Form\WithdrawalSlip\Wsma  $wsma
     * @return void
     */
    public function restored(Wsma $wsma)
    {
        activity()
        ->performedOn($wsma)
        ->causedBy(auth()->user())
        ->event('Restored')
        ->withProperties([
            'http_method'            => 'GET',
            'document_series_number' => $wsma->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log('successfuly restored minor asset ' . $wsma->document_series_no);
    }

    /**
     * Handle the Wsma "force deleted" event.
     *
     * @param  \App\Models\Form\WithdrawalSlip\Wsma  $wsma
     * @return void
     */
    public function forceDeleted(Wsma $wsma)
    {
        activity()
        ->performedOn($wsma)
        ->causedBy(auth()->user())
        ->event('Permanent Deleted')
        ->withProperties([
            'http_method'            => 'POST',
            'document_series_number' => $wsma->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log($wsma->document_series_no . ' minor asset permanently deleted');
    }
}
