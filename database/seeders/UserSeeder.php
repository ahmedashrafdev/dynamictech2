<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user = [
            "name" => 'admin',
            "email" => 'admin@dynamiceg.com',
            "password" => bcrypt(123456),
        ];

        User::create($user);
    }
}
