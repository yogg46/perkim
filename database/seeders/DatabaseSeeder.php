<?php

namespace Database\Seeders;

use App\Models\Pengajuan;
use App\Models\type_bangunan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Userseeder::class);
        $this->call(Hakseeder::class);
        $this->call(persyaratanSeeder::class);
        \App\Models\User::factory(2)->create();
        Pengajuan::factory()->count(3)->create();
        type_bangunan::factory()->count(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}