<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    public function run()
    {
        $user = [
            [
               'person_id'=> 1,
               'email'=>'admin@gmail.com',
               'password'=> bcrypt('admin123'),
            ],
            [
              'person_id'=> 2,
               'email'=>'lacioreybert@gmail.com',
               'password'=> bcrypt('#rlacio45'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
