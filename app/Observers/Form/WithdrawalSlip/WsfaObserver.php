<?php

namespace App\Observers\Form\WithdrawalSlip;

use App\Models\Form\WithdrawalSlip\Wsfa;
use App\Services\NotificationService;

class WsfaObserver
{
    public $afterCommit = true;
    
    public function created(Wsfa $wsfa)
    {
        cache()->forget('wsfa-data');
        cache()->forget('activitylog-data');

        NotificationService::notifyAdministrator("fixedasset/show/".$wsfa->id, $wsfa->document_series_no, 'Created fixed asset record');

        activity()
        ->performedOn($wsfa)
        ->causedBy(auth()->user())
        ->event('Created')
        ->withProperties([
            'http_method'            => 'POST',
            'document_series_number' => $wsfa->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
        ])
        ->log('successfully created fixed asset record');
    }

    public function retrieved(Wsfa $wsfa)
    {
        //
    }

    /**
     * Handle the Wsfa "updated" event.
     *
     * @param  \App\Models\Form\WithdrawalSlip\Wsfa  $wsfa
     * @return void
     */
    public function updated(Wsfa $wsfa)
    {
        //
    }

    /**
     * Handle the Wsfa "deleted" event.
     *
     * @param  \App\Models\Form\WithdrawalSlip\Wsfa  $wsfa
     * @return void
     */
    public function deleted(Wsfa $wsfa)
    {
        activity()
        ->performedOn($wsfa)
        ->causedBy(auth()->user())
        ->event('Deleted')
        ->withProperties([
            'http_method'            => 'POST',
            'document_series_number' => $wsfa->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log($wsfa->document_series_no . ' fixed asset has been deleted');
    }

    /**
     * Handle the Wsfa "restored" event.
     *
     * @param  \App\Models\Form\WithdrawalSlip\Wsfa  $wsfa
     * @return void
     */
    public function restored(Wsfa $wsfa)
    {
        activity()
        ->performedOn($wsfa)
        ->causedBy(auth()->user())
        ->event('Restored')
        ->withProperties([
            'http_method'            => 'GET',
            'document_series_number' => $wsfa->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log('successfuly restored fixed asset ' . $wsfa->document_series_no);
    }

    /**
     * Handle the Wsfa "force deleted" event.
     *
     * @param  \App\Models\Form\WithdrawalSlip\Wsfa  $wsfa
     * @return void
     */
    public function forceDeleted(Wsfa $wsfa)
    {
        activity()
        ->performedOn($wsfa)
        ->causedBy(auth()->user())
        ->event('Permanent Deleted')
        ->withProperties([
            'http_method'            => 'POST',
            'document_series_number' => $wsfa->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log($wsfa->document_series_no . ' fixed asset permanently deleted');
    }
}
