<?php

namespace Database\Factories;

use App\Models\BloodGroup;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'phone' => fake()->unique()->e164PhoneNumber(),
            'emergency_phone' => fake()->e164PhoneNumber(),
            'email' => fake()->unique()->freeEmail(),
            'blood_group_id' => BloodGroup::inRandomOrder()->first(),
            'is_active' => fake()->boolean()
        ];
    }
}
