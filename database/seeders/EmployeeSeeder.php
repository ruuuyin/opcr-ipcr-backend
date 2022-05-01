<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder {

    public function run() {
        DB::table('employee_profile')->insert([
            [
                'user' => 1,
                'role' => 1,
                'first_name' => 'Adrian',
                'middle_name' => null,
                'last_name' => 'Rodriguez',
                'extension_name' => null,
            ],
            [
                'user' => 2,
                'role' => 2,
                'first_name' => 'Raymond',
                'middle_name' => 'Q',
                'last_name' => 'Zaratar',
                'extension_name' => null,
            ],
            [
                'user' => null,
                'role' => 3,
                'first_name' => 'Jerry',
                'middle_name' => null,
                'last_name' => 'Sainz',
                'extension_name' => null,
            ],
            [
                'user' => null,
                'role' => 3,
                'first_name' => 'Vian Jerome',
                'middle_name' => 'I',
                'last_name' => 'Rayos',
                'extension_name' => null,
            ],
            [
                'user' => 3,
                'role' => 3,
                'first_name' => 'Cedric Anthony',
                'middle_name' => null,
                'last_name' => 'Morales',
                'extension_name' => null,
            ],
            [
                'user' => null,
                'role' => 3,
                'first_name' => 'Jaime',
                'middle_name' => null,
                'last_name' => 'Pardo',
                'extension_name' => null,
            ],
        ]);
    }
}
