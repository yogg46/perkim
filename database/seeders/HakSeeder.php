<?php

namespace Database\Seeders;

use App\Models\hakaksesuser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      hakaksesuser::create([
        // 'id' => 0,
        'hakakses' => 'Pengaju Siteplan',
      ]);
      hakaksesuser::create([
        // 'id' => '1',
        'hakakses' => 'Admin Perkim',
      ]);
      hakaksesuser::create([
        // 'id' => '2',
        'hakakses' => 'Verifikator Berkas',
      ]);
      hakaksesuser::create([
        'hakakses' => 'Verifikator Lapangan',
      ]);
      hakaksesuser::create([
        'hakakses' => 'Pemberi Rekomendasi',
      ]);

    }
}
