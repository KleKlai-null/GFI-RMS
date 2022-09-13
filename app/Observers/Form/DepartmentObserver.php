<?php

namespace App\Observers\Form;

use App\Models\Department;

class DepartmentObserver
{
    /**
     * Handle the Department "created" event.
     *
     * @param  \App\Models\Department  $department
     * @return void
     */
    public function created(Department $department)
    {
        activity()
        ->performedOn($department)
        ->causedBy(auth()->user())
        ->event('Created')
        ->withProperties([
            'http_method'            => 'POST',
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
        ])
        ->log('successfully created department ' . $department->name);
    }

    /**
     * Handle the Department "updated" event.
     *
     * @param  \App\Models\Department  $department
     * @return void
     */
    public function updated(Department $department)
    {
        //
    }

    /**
     * Handle the Department "deleted" event.
     *
     * @param  \App\Models\Department  $department
     * @return void
     */
    public function deleted(Department $department)
    {
        activity()
        ->performedOn($department)
        ->causedBy(auth()->user())
        ->event('Deleted')
        ->withProperties([
            'http_method'            => 'POST',
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
        ])
        ->log($department->name . ' department has been deleted');
    }

    /**
     * Handle the Department "restored" event.
     *
     * @param  \App\Models\Department  $department
     * @return void
     */
    public function restored(Department $department)
    {
        activity()
        ->performedOn($department)
        ->causedBy(auth()->user())
        ->event('Restored')
        ->withProperties([
            'http_method'            => 'POST',
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
        ])
        ->log('successfuly restored ' . $department->name);
    }

    /**
     * Handle the Department "force deleted" event.
     *
     * @param  \App\Models\Department  $department
     * @return void
     */
    public function forceDeleted(Department $department)
    {
        activity()
        ->performedOn($department)
        ->causedBy(auth()->user())
        ->event('Permanent Deleted')
        ->withProperties([
            'http_method'            => 'POST',
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
        ])
        ->log($department->name . ' permanently deleted');
    }
}
