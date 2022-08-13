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
            'username' => 'pengaju',
            'password' => bcrypt('password'),
            'role' => '1',
            'dark' => 1,
        ]);
        User::create([
            'name' => 'Joko',
            'username' => 'berkas',
            'password' => bcrypt('password'),
            'role' => '3',
            'dark' => 1,
        ]);
        User::create([
            'name' => 'Joko',
            'username' => 'lapangan',
            'password' => bcrypt('password'),
            'role' => '4',
            'dark' => 1
        ]);
        User::create([
            'name' => 'Joko',
            'username' => 'rekom',
            'password' => bcrypt('password'),
            'role' => '5',
            'dark' => 1,
        ]);
    }
}
