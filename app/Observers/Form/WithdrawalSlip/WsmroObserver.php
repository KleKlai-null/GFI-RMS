<?php

namespace App\Observers\Form\WithdrawalSlip;

use App\Models\Form\WithdrawalSlip\Wsmro;
use App\Services\NotificationService;

class WsmroObserver
{
    public $afterCommit = true;
    
    public function created(Wsmro $wsmro)
    {
        cache()->forget('wsmro-data');
        cache()->forget('activitylog-data');

        NotificationService::notifyAdministrator("maintenance/show/".$wsmro->id, $wsmro->document_series_no, 'Created maintenance, repairs, operations record');

        activity()
        ->performedOn($wsmro)
        ->causedBy(auth()->user())
        ->event('Created')
        ->withProperties([
            'http_method'            => 'POST',
            'document_series_number' => $wsmro->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
        ])
        ->log('successfully created maintenance, repairs, operations record');
    }

    public function retrieved(Wsmro $wsmro)
    {
        //
    }

    /**
     * Handle the Wsmro "updated" event.
     *
     * @param  \App\Models\Form\WithdrawalSlip\Wsmro  $wsmro
     * @return void
     */
    public function updated(Wsmro $wsmro)
    {
        //
    }

    /**
     * Handle the Wsmro "deleted" event.
     *
     * @param  \App\Models\Form\WithdrawalSlip\Wsmro  $wsmro
     * @return void
     */
    public function deleted(Wsmro $wsmro)
    {
        activity()
        ->performedOn($wsmro)
        ->causedBy(auth()->user())
        ->event('Deleted')
        ->withProperties([
            'http_method'            => 'POST',
            'document_series_number' => $wsmro->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log($wsmro->document_series_no . ' maintenance, repairs, operations has been deleted');
    }

    /**
     * Handle the Wsmro "restored" event.
     *
     * @param  \App\Models\Form\WithdrawalSlip\Wsmro  $wsmro
     * @return void
     */
    public function restored(Wsmro $wsmro)
    {
        activity()
        ->performedOn($wsmro)
        ->causedBy(auth()->user())
        ->event('Restored')
        ->withProperties([
            'http_method'            => 'GET',
            'document_series_number' => $wsmro->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log('successfuly restored maintenance, repairs, operations ' . $wsmro->document_series_no);
    }

    /**
     * Handle the Wsmro "force deleted" event.
     *
     * @param  \App\Models\Form\WithdrawalSlip\Wsmro  $wsmro
     * @return void
     */
    public function forceDeleted(Wsmro $wsmro)
    {
        activity()
        ->performedOn($wsmro)
        ->causedBy(auth()->user())
        ->event('Permanent Deleted')
        ->withProperties([
            'http_method'            => 'POST',
            'document_series_number' => $wsmro->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log($wsmro->document_series_no . ' maintenance, repairs, operations permanently deleted');
    }
}
