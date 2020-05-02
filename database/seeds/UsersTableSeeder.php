<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$4v2d4YFAzyy2EJ51o62yG.G/ZDWfDzJzffvlKEpRw6tU9FnSHIT3W',
                'remember_token' => null,
            ],
        ];

        User::insert($users);

    }
}
