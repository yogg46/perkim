<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pengajuan>
 */
class PengajuanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $user = User::where('role', '1')->pluck('id');

        return [
            'dev' => Arr::random(['PT', 'Perorangan']),
            'nama_dev' => $this->faker->name(),
            'alamat_dev' => $this->faker->address(),
            'no_hp' => $this->faker->phoneNumber(),
            'asosiasi' => $this->faker->company(),
            'no_asosiasi' => $this->faker->randomNumber(5, true),
            'nama_pro' => $this->faker->jobTitle(),
            'alamat_pro' => $this->faker->address(),
            'pemohon1' => $this->faker->name(),
            'tel_pemohon1' => $this->faker->phoneNumber(),
            'pemohon2' =>  $this->faker->name(),
            'tel_pemohon2' => $this->faker->phoneNumber(),
            'psu' => $this->faker->randomNumber(3, true),
            'kavling' => $this->faker->randomNumber(3, true),
            'total' => $this->faker->randomNumber(3, true),
            'total_kavling' => $this->faker->randomNumber(3, true),
            'status' => Arr::random(['1', '2', '3', '4', '5']),
            'date' => now()->format('d-m-Y'),
            'tahun' => now()->year,
            'pengaju' => $this->faker->randomElement($user),
            // 'name' => $this->faker->name(),
            // 'username' => $this->faker->unique()->userName(),
            // 'role' => Arr::random(['1', '2', '3', '4', '5']),

        ];
    }
}