<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('departments')->insert([
            ['name' => 'HR'],
            ['name' => 'Finance'],
            ['name' => 'Sales'],
        ]);
    }
}
