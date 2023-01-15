<?php

namespace Database\Seeders;

use Users\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'admin',
                'user_name' => 'admin',
                'email' => 'admin@admin.com',
                'mobile' => '01557011197',
                'password'=> Hash::make('admin@admin.com'),
                'type' => 'crm admin',
                'code' => uniqid(),
                'status' => 1
            ]
        ];
        User::insert($data);
    }
}
