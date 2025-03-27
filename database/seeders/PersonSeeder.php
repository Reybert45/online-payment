<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('people')->insert([
            ['first_name' => 'John', 'middle_name' => "D.", 'last_name' => "Doe", 'phone_no' => '09215345649', 'profile_picture' => 'https://t4.ftcdn.net/jpg/03/64/21/11/360_F_364211147_1qgLVxv1Tcq0Ohz3FawUfrtONzz8nq3e.jpg'],
            ['first_name' => 'Juan', 'middle_name' => "A.", 'last_name' => "Dela Cruz", 'phone_no' => '09213456754', 'profile_picture' => 'https://plus.unsplash.com/premium_photo-1689568126014-06fea9d5d341?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cHJvZmlsZXxlbnwwfHwwfHx8MA%3D%3D'],
        ]);
    }
}
