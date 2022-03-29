<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\rekamMedis>
 */
class rekamMedisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'dokter_id' => mt_rand(1,5),
            'pasien_id' => mt_rand(1,5),
            'slug' => $this->faker->slug(),
            'penyakit' => $this->faker->sentence(mt_rand(2,8)),
            'kondisi' => $this->faker->paragraph(),
            'suhu' => mt_rand(35,46),
            'riwayat' => $this->faker->paragraph(),
            'resep' => $this->faker->sentence(mt_rand(2,8))
        ];
    }
}
