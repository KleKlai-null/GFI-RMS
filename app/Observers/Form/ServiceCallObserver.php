<?php

namespace App\Observers\Form;

use App\Models\Form\FormStatistic;
use App\Models\Form\ServiceCall;
use App\Services\DashboardService;
use App\Services\NotificationService;

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
        ->log('successfully created service call record');

        NotificationService::notifyAdministrator("servicecall/show/".$serviceCall->id, $serviceCall->document_series_no, 'Created service call record');

        // Record statistic
        DashboardService::update_form_statistic('App\Models\Form\ServiceCall', 'sc');

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
        ->log($serviceCall->document_series_no . ' service call has been deleted');
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
        ->log('successfuly restored service call' . $serviceCall->document_series_no);
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
        ->log($serviceCall->document_series_no . ' service call permanently deleted');
    }

    public function updateStatistic()
    {
        DashboardService::update_form_statistic('App\Models\Form\ServiceCall', 'sc');
    }
}
