<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('employees')->insert([
            ['person_id' => 1, 'employee_id' => '000-000-001', 'department_id' => 1, 'designation' => 'Head of Human Resource', 'hired_date' => '2025-03-27', 'supervisor_person_id' => 0],
        ]);
    }
}
