<?php

namespace App\Observers\Form\WithdrawalSlip;

use App\Models\Form\WithdrawalSlip\Wsmi;
use Illuminate\Http\Client\Request;

class WsmiObserver
{
    public $afterCommit = true;

    public function created(Wsmi $wsmi)
    {
        cache()->forget('wsmi-data');
        cache()->forget('activitylog-data');

        activity()
        ->performedOn($wsmi)
        ->causedBy(auth()->user())
        ->event('Created')
        ->withProperties([
            'http_method'            => 'POST',
            'document_series_number' => $wsmi->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
        ])
        ->log('successfully created merchandise record');
    }

    public function retrieved(Wsmi $wsmi)
    {
        //
    }

    /**
     * Handle the Wsmi "updated" event.
     *
     * @param  \App\Models\Form\Withdrawal\Wsmi  $wsmi
     * @return void
     */
    public function updated(Wsmi $wsmi)
    {
        //
    }

    /**
     * Handle the Wsmi "deleted" event.
     *
     * @param  \App\Models\Form\Withdrawal\Wsmi  $wsmi
     * @return void
     */
    public function deleted(Wsmi $wsmi)
    {
        activity()
        ->performedOn($wsmi)
        ->causedBy(auth()->user())
        ->event('Deleted')
        ->withProperties([
            'http_method'            => 'POST',
            'document_series_number' => $wsmi->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log($wsmi->document_series_no . ' has been deleted');
    }

    /**
     * Handle the Wsmi "restored" event.
     *
     * @param  \App\Models\Form\Withdrawal\Wsmi  $wsmi
     * @return void
     */
    public function restored(Wsmi $wsmi)
    {
        activity()
        ->performedOn($wsmi)
        ->causedBy(auth()->user())
        ->event('Restored')
        ->withProperties([
            'http_method'            => 'GET',
            'document_series_number' => $wsmi->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log('successfuly restored ' . $wsmi->document_series_no);
    }

    /**
     * Handle the Wsmi "force deleted" event.
     *
     * @param  \App\Models\Form\Withdrawal\Wsmi  $wsmi
     * @return void
     */
    public function forceDeleted(Wsmi $wsmi)
    {
        activity()
        ->performedOn($wsmi)
        ->causedBy(auth()->user())
        ->event('Permanent Deleted')
        ->withProperties([
            'http_method'            => 'POST',
            'document_series_number' => $wsmi->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log($wsmi->document_series_no . ' permanently deleted');
    }

}
