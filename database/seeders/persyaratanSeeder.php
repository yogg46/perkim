<?php

namespace Database\Seeders;

use App\Models\persyaratanModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class persyaratanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        persyaratanModel::create([
            // 'id' => 0,
            'persyaratan' => 'persyaratan',
          ]);
    }
}