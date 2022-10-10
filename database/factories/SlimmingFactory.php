<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SlimmingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nama'=>$this->faker->name(),
            'no_ho'=>$this->faker->numberbetween('111111111111,888888888888'),
            'berat_badan'=>$this->faker->numberbetween('50,90'),
            'lokasi_perawatan'=>$this->faker->address(),
            'gerai'=>$this->faker->name(),
            'riwayat_penyakit'=>$this->faker->address(),
            'keterangan_lain'=>$this->faker->address(),

        ];
    }
}
