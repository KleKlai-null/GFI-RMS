<?php

namespace Database\Seeders;

use App\Models\Form\FormStatistic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class FormStatisticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Clear cache
        Artisan::call('cache:clear');

        FormStatistic::create([
            'form'      => 'mi',
            'total'     => 0,
            'open'      => 0,
            'closed'    => 0,
            'archived'  => 0,
        ]);

        FormStatistic::create([
            'form'      => 'mro',
            'total'     => 0,
            'open'      => 0,
            'closed'    => 0,
            'archived'  => 0,
        ]);

        FormStatistic::create([
            'form'      => 'dm',
            'total'     => 0,
            'open'      => 0,
            'closed'    => 0,
            'archived'  => 0,
        ]);

        FormStatistic::create([
            'form'      => 'fg',
            'total'     => 0,
            'open'      => 0,
            'closed'    => 0,
            'archived'  => 0,
        ]);

        FormStatistic::create([
            'form'      => 'fa',
            'total'     => 0,
            'open'      => 0,
            'closed'    => 0,
            'archived'  => 0,
        ]);

        FormStatistic::create([
            'form'      => 'ma',
            'total'     => 0,
            'open'      => 0,
            'closed'    => 0,
            'archived'  => 0,
        ]);

        FormStatistic::create([
            'form'      => 'mr',
            'total'     => 0,
            'open'      => 0,
            'closed'    => 0,
            'archived'  => 0,
        ]);

        FormStatistic::create([
            'form'      => 'sc',
            'total'     => 0,
            'open'      => 0,
            'closed'    => 0,
            'archived'  => 0,
        ]);
    }
}
