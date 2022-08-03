<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'password' => bcrypt('password'),
            'role' => '2',
            'dark' => 0,
        ]);
        User::create([
            'name' => 'Joko',
            'username' => 'joko_12',
            'password' => bcrypt('password'),
            'role' => '1',
            'dark' => 1,
        ]);
    }
}