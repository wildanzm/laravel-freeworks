<?php

namespace Database\Seeders;

use App\Models\DetailUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detail_users = [
            [
                'users_id' => 1,
                'photo' => '',
                'role' => 'Software Engineer',
                'contact_number' => '',
                'biography' => '',
                'created_at' => date('y-m-d h:i:s'),
                'updated_at' => date('y-m-d h:i:s'),
            ],
            [
                'users_id' => 2,
                'photo' => '',
                'role' => 'UI/UX Designer',
                'contact_number' => '',
                'biography' => '',
                'created_at' => date('y-m-d h:i:s'),
                'updated_at' => date('y-m-d h:i:s'),
            ]
        ];

        DetailUser::insert($detail_users);
    }
}
