<?php

namespace App\Services;

use App\Models\User;
use App\Notifications\FormCreated;

class NotificationService
{

    public static function notifyAdministrator($link, $form_document_series, $message) 
    {
        
        $detail = [
            'user'                      => auth()->user()->fullName() ?? 'System',
            'message'                   => $message,
            'link'                      => $link,
            'form_document_series'      => $form_document_series,
        ];

        $users = User::whereHas("roles", function($q){ $q->where("name", "administrator"); })->get();

        foreach($users as $user)
        {
            $user->notify(new FormCreated($detail));
        }

        return;
    }
}