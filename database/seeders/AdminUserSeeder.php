<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'amaefule720@gmail.com', 
            'password' => Hash::make('1234'), 
            'role' => 'admin', // Assuming you have a 'role' column in your 'users' table
        ]);
    }
}
