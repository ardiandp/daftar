<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nis'=> $this->faker->numberbetween(11111,22222),
            'namasiswa' => $this->faker->name(),
            'alamat' =>$this->faker->address(),
        ];
    }
}
