<?php

namespace App\Observers\Form;

use App\Models\Form\FormStatistic;
use App\Models\Form\Memorandum;
use App\Services\DashboardService;
use App\Services\NotificationService;

class MemorandumObserver
{
    public $afterCommit = true;
    
    public function created(Memorandum $memorandum)
    {
        cache()->forget('memorandum-data');
        cache()->forget('activitylog-data');

        activity()
        ->performedOn($memorandum)
        ->causedBy(auth()->user())
        ->event('Created')
        ->withProperties([
            'http_method'            => 'POST',
            'document_series_number' => $memorandum->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
        ])
        ->log('successfully created memorandum record');

        // No Route yet
        NotificationService::notifyAdministrator("memorandum/show/".$memorandum->id, $memorandum->document_series_no, 'Created memorandum record');

        // Record statistic
        DashboardService::update_form_statistic('App\Models\Form\Memorandum', 'mr');
    }

    public function retrieved(Memorandum $memorandum)
    {
        //
    }

    /**
     * Handle the Memorandum "updated" event.
     *
     * @param  \App\Models\Form\Memorandum  $memorandum
     * @return void
     */
    public function updated(Memorandum $memorandum)
    {
        //
    }

    /**
     * Handle the Memorandum "deleted" event.
     *
     * @param  \App\Models\Form\Memorandum  $memorandum
     * @return void
     */
    public function deleted(Memorandum $memorandum)
    {
        activity()
        ->performedOn($memorandum)
        ->causedBy(auth()->user())
        ->event('Deleted')
        ->withProperties([
            'http_method'            => 'POST',
            'document_series_number' => $memorandum->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log($memorandum->document_series_no . ' memorandum has been deleted');
    }

    /**
     * Handle the Memorandum "restored" event.
     *
     * @param  \App\Models\Form\Memorandum  $memorandum
     * @return void
     */
    public function restored(Memorandum $memorandum)
    {
        activity()
        ->performedOn($memorandum)
        ->causedBy(auth()->user())
        ->event('Restored')
        ->withProperties([
            'http_method'            => 'GET',
            'document_series_number' => $memorandum->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log('successfuly restored memorandum' . $memorandum->document_series_no);
    }

    /**
     * Handle the Memorandum "force deleted" event.
     *
     * @param  \App\Models\Form\Memorandum  $memorandum
     * @return void
     */
    public function forceDeleted(Memorandum $memorandum)
    {
        activity()
        ->performedOn($memorandum)
        ->causedBy(auth()->user())
        ->event('Permanent Deleted')
        ->withProperties([
            'http_method'            => 'POST',
            'document_series_number' => $memorandum->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log($memorandum->document_series_no . ' memorandum permanently deleted');
    }

    public function updateStatistic()
    {
        DashboardService::update_form_statistic('App\Models\Form\Memorandum', 'mr');
    }
}
