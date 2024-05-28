<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'John',
                'email' => 'john@gmail.com',
                'password' => Hash::make('john123'),
                'remember_token' => NULL,
                'created_at' => date('y-m-d h:i:s'),
                'updated_at' => date('y-m-d h:i:s'),
            ],
            [
                'name' => 'Jane',
                'email' => 'jane@gmail.com',
                'password' => Hash::make('jane123'),
                'remember_token' => NULL,
                'created_at' => date('y-m-d h:i:s'),
                'updated_at' => date('y-m-d h:i:s'),
            ]
        ];

        User::insert($users);
    }
}
