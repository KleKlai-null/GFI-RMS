<?php

namespace App\Services;

use App\Models\Form\FormStatistic;

class DashboardService
{

    public static function update_form_statistic($model, $form)
    {
        cache()->forget('dashboard_form_statistic');

        // Recount current status
        $total = $model::count();
        $open = $model::where('status', 'Open')->count();
        $closed = $model::where('status', 'Closed')->count();
        $archived = $model::where('status', 'Archived')->count();

        // Record statistic
        FormStatistic::where('form', $form)->first()->update([
            'total'     => $total,
            'open'      => $open,
            'closed'    => $closed,
            'archived'  => $archived
        ]);
    }
}
