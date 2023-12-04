<?php

namespace Database\Factories;

use App\Models\BloodGroup;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->firstName() . " " . fake()->lastName(),
            'code' => str_pad(fake()->randomNumber(6), 6, '0', STR_PAD_LEFT),
            'phone' => fake()->boolean(80) ? fake()->unique()->numerify('612#######') : null,
            'emergency_phone' => fake()->numerify('612#######'),
            'email' => fake()->unique()->freeEmail(),
            'blood_group_id' => fake()->randomElement(BloodGroup::all()),
            'is_active' => fake()->boolean(80),
        ];
    }
}
