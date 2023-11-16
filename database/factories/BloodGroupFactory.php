<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BloodGroupFactory extends Factory
{
    public function definition(): array
    {
        $faker = fake();
        $faker->seed(29);

        return [
            'name' => $faker->unique()->bloodGroup()
        ];
    }
}
