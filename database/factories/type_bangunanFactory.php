<?php

namespace Database\Factories;

use App\Models\Pengajuan;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\type_bangunan>
 */
class type_bangunanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $pengajuan = Pengajuan::pluck('id');

        return [
            'pengajuan' => $this->faker->randomElement($pengajuan),
            'type'=> Arr::random(['type 12', 'type 24', 'type 53', 'type 34', 'Usaha']),
            'jumlah'=> $this->faker->randomNumber(3, true),
            'kategori' => Arr::random(['Subsidi','Komersil','Ruko']),

            // 'pengajuan' => ,
        ];
    }
}