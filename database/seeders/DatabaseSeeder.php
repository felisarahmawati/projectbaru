<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'=> 'admin',
                'email'=> 'admin123@gmail.com',
                'nohp'=> '08123456789',
                'is_admin'=> '1',
                'password'=> bcrypt('admin')
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
