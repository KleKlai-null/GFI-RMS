<?php

namespace Database\Seeders;

use App\Models\Form\FormStatistic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormStatisticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FormStatistic::create([
            'form'      => 'MI',
            'total'     => 50,
            'open'      => 40,
            'closed'    => 0,
            'archived'  => 10,
        ]);

        FormStatistic::create([
            'form'      => 'MRO',
            'total'     => 100,
            'open'      => 40,
            'closed'    => 0,
            'archived'  => 0,
        ]);

        FormStatistic::create([
            'form'      => 'DM',
            'total'     => 150,
            'open'      => 40,
            'closed'    => 5,
            'archived'  => 5,
        ]);

        FormStatistic::create([
            'form'      => 'FG',
            'total'     => 200,
            'open'      => 40,
            'closed'    => 5,
            'archived'  => 0,
        ]);

        FormStatistic::create([
            'form'      => 'FA',
            'total'     => 50,
            'open'      => 40,
            'closed'    => 5,
            'archived'  => 5,
        ]);

        FormStatistic::create([
            'form'      => 'MA',
            'total'     => 40,
            'open'      => 40,
            'closed'    => 5,
            'archived'  => 5,
        ]);

        FormStatistic::create([
            'form'      => 'MR',
            'total'     => 50,
            'open'      => 40,
            'closed'    => 5,
            'archived'  => 5,
        ]);

        FormStatistic::create([
            'form'      => 'SC',
            'total'     => 40,
            'open'      => 40,
            'closed'    => 5,
            'archived'  => 5,
        ]);

        FormStatistic::create([
            'form'      => 'RS',
            'total'     => 50,
            'open'      => 40,
            'closed'    => 5,
            'archived'  => 5,
        ]);
    }
}
