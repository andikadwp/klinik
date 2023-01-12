<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' => 'superadmin',
            'password' => bcrypt('123456'),
        ]);

        DB::table('users')->insert([
            'name' => 'adwp',
            'email' => 'adwp@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('123456'),
        ]);
    }
}
