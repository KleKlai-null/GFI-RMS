<?php

namespace App\Observers\Form;

use App\Models\Form\Memorandum;

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
        ->log($memorandum->document_series_no . ' has been deleted');
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
        ->log('successfuly restored' . $memorandum->document_series_no);
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
        ->log($memorandum->document_series_no . ' permanently deleted');
    }
}
