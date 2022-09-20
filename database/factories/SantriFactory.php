<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SantriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'tmp_lahir' => $this->faker->city(),
            'tgl_lahir' => $this->faker->dateTime(),
            'alamat' => $this->faker->address(),
            'no_hp' => $this->faker->phoneNumber()
        ];
    }
}
