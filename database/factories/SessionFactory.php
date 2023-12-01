<?php

namespace Database\Factories;

use App\Models\ExerciseType;
use Illuminate\Database\Eloquent\Factories\Factory;

class SessionFactory extends Factory
{
    private static $exercisteTypesCount = [];

    public function definition(): array
    {
        $exerciseType = fake()->randomElement(ExerciseType::all());
        self::$exercisteTypesCount[$exerciseType->name] = (self::$exercisteTypesCount[$exerciseType->name] ?? 0) + 1;

        $maxCapacity = fake()->numberBetween(10, 20);

        return [
            'name' => "Clase de {$exerciseType->name} " . self::$exercisteTypesCount[$exerciseType->name],
            'exercise_type_id' => $exerciseType,
            'max_capacity' => $maxCapacity,
            'description' => fake()->paragraph()
        ];
    }
}
