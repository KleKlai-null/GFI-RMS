<?php

namespace App\Observers\Form\WithdrawalSlip;

use App\Models\Form\FormStatistic;
use App\Models\Form\WithdrawalSlip\Wsfg;
use App\Services\DashboardService;
use App\Services\NotificationService;

class WsfgObserver
{

    public $afterCommit = true;

    public function created(Wsfg $wsfg)
    {
        cache()->forget('wsfg-data');
        cache()->forget('activitylog-data');

        activity()
        ->performedOn($wsfg)
        ->causedBy(auth()->user())
        ->event('Created')
        ->withProperties([
            'http_method'            => 'POST',
            'document_series_number' => $wsfg->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
        ])
        ->log('successfully created finished goods record');

        NotificationService::notifyAdministrator("finishedgoods/show/".$wsfg->id, $wsfg->document_series_no, 'Created finished goods record');

        // Record statistic
        DashboardService::update_form_statistic('App\Models\Form\WithdrawalSlip\Wsfg', 'fg');
    }

    public function retrieved(Wsfg $wsfg)
    {
        //
    }

    /**
     * Handle the Wsfg "updated" event.
     *
     * @param  \App\Models\Form\WithdrawalSlip\Wsfg  $wsfg
     * @return void
     */
    public function updated(Wsfg $wsfg)
    {
        //
    }

    /**
     * Handle the Wsfg "deleted" event.
     *
     * @param  \App\Models\Form\WithdrawalSlip\Wsfg  $wsfg
     * @return void
     */
    public function deleted(Wsfg $wsfg)
    {
        activity()
        ->performedOn($wsfg)
        ->causedBy(auth()->user())
        ->event('Deleted')
        ->withProperties([
            'http_method'            => 'POST',
            'document_series_number' => $wsfg->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log($wsfg->document_series_no . ' finished goods has been deleted');
    }

    /**
     * Handle the Wsfg "restored" event.
     *
     * @param  \App\Models\Form\WithdrawalSlip\Wsfg  $wsfg
     * @return void
     */
    public function restored(Wsfg $wsfg)
    {
        activity()
        ->performedOn($wsfg)
        ->causedBy(auth()->user())
        ->event('Restored')
        ->withProperties([
            'http_method'            => 'GET',
            'document_series_number' => $wsfg->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log('successfuly restored finished goods ' . $wsfg->document_series_no);
    }

    /**
     * Handle the Wsfg "force deleted" event.
     *
     * @param  \App\Models\Form\WithdrawalSlip\Wsfg  $wsfg
     * @return void
     */
    public function forceDeleted(Wsfg $wsfg)
    {
        activity()
        ->performedOn($wsfg)
        ->causedBy(auth()->user())
        ->event('Permanent Deleted')
        ->withProperties([
            'http_method'            => 'POST',
            'document_series_number' => $wsfg->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log($wsfg->document_series_no . ' finished goods permanently deleted');
    }

    public function updateStatistic()
    {
        DashboardService::update_form_statistic('App\Models\Form\WithdrawalSlip\Wsfg', 'fg');
    }
}
