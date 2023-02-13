<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class PersonFactory extends Factory
{

    public function definition()
    {
        return [
            'firstName' => fake()->firstName(),
            'lastName' => fake()->lastName(),
            'dateOfBirth' => fake()->date(),
            // 'heigth' => fake()->numberBetween(100, 250)
            'heigth' =>
            fake()->boolean()
                ? fake()->numberBetween(100, 250)
                : null,
            // con la stringa vuota mi dava un errore


        ];
    }
}
