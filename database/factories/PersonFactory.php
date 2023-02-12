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
            'heigth' => fake()->numberBetween(100, 250)


        ];
    }
}
