<?php

namespace App\Observers\Form;

use App\Models\Form\ServiceCall;

class ServiceCallObserver
{
    public $afterCommit = true;
    
    public function created(ServiceCall $serviceCall)
    {
        cache()->forget('servicecall-data');
        cache()->forget('activitylog-data');

        activity()
        ->performedOn($serviceCall)
        ->causedBy(auth()->user())
        ->event('Created')
        ->withProperties([
            'http_method'            => 'POST',
            'document_series_number' => $serviceCall->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
        ])
        ->log('successfully created memorandum record');
    }

    public function retrieved(ServiceCall $serviceCall)
    {
        //
    }

    /**
     * Handle the ServiceCall "updated" event.
     *
     * @param  \App\Models\Form\ServiceCall  $serviceCall
     * @return void
     */
    public function updated(ServiceCall $serviceCall)
    {
        //
    }

    /**
     * Handle the ServiceCall "deleted" event.
     *
     * @param  \App\Models\Form\ServiceCall  $serviceCall
     * @return void
     */
    public function deleted(ServiceCall $serviceCall)
    {
        activity()
        ->performedOn($serviceCall)
        ->causedBy(auth()->user())
        ->event('Deleted')
        ->withProperties([
            'http_method'            => 'POST',
            'document_series_number' => $serviceCall->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log($serviceCall->document_series_no . ' has been deleted');
    }

    /**
     * Handle the ServiceCall "restored" event.
     *
     * @param  \App\Models\Form\ServiceCall  $serviceCall
     * @return void
     */
    public function restored(ServiceCall $serviceCall)
    {
        activity()
        ->performedOn($serviceCall)
        ->causedBy(auth()->user())
        ->event('Restored')
        ->withProperties([
            'http_method'            => 'GET',
            'document_series_number' => $serviceCall->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log('successfuly restored' . $serviceCall->document_series_no);
    }

    /**
     * Handle the ServiceCall "force deleted" event.
     *
     * @param  \App\Models\Form\ServiceCall  $serviceCall
     * @return void
     */
    public function forceDeleted(ServiceCall $serviceCall)
    {
        activity()
        ->performedOn($serviceCall)
        ->causedBy(auth()->user())
        ->event('Permanent Deleted')
        ->withProperties([
            'http_method'            => 'POST',
            'document_series_number' => $serviceCall->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log($serviceCall->document_series_no . ' permanently deleted');
    }
}
