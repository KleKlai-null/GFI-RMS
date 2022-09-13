<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create([
            'name'          => 'Production',
            'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        ]);
        
        $data = [
            [
                'name'  => 'Supply Chain Mgt'
            ],
            [
                'name'  => 'Procurement'
            ],
            [
                'name'  => 'Accounting'
            ],
            [
                'name'  => 'Human Resource'
            ],
            [
                'name'  => 'Legal'
            ],
            [
                'name'  => 'Marketing'
            ],
            [
                'name'  => 'Sales'
            ],
            [
                'name'  => 'Customer Service'
            ],
            [
                'name'  => 'Information Technology'
            ]
        ];

        Department::insert($data);
    }
}
