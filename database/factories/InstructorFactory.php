<?php

namespace Database\Factories;

use App\Models\BloodGroup;
use Illuminate\Database\Eloquent\Factories\Factory;

class InstructorFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'phone' => fake()->unique()->numerify('612#######'),
            'emergency_phone' => fake()->numerify('612#######'),
            'email' => fake()->unique()->freeEmail(),
            'blood_group_id' => fake()->randomElement(BloodGroup::all()),
            'is_active' => fake()->boolean()
        ];
    }
}
