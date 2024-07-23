<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pegawai>
 */
class PegawaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'nama_pegawai' => fake()->name(),
        'no_telepon' => fake()->randomNumber(),
        'alamat' => $this->faker->randomElement(['Banjarbaru', 'Banjarmasin']),
        ];
    }
}
