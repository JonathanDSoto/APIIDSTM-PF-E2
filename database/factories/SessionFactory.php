<?php

namespace Database\Factories;

use App\Models\ExerciseType;
use App\Models\Instructor;
use App\Models\Session;
use Illuminate\Database\Eloquent\Factories\Factory;

class SessionFactory extends Factory
{
    public function definition(): array
    {
        $exerciseType = fake()->randomElement(ExerciseType::all());
        $instructor = fake()->randomElement(Instructor::all());

        while(
            Session::where('instructor_id', $instructor->id)
                ->where('exercise_type_id', $exerciseType->id)
                ->exists()
        ) {
            $exerciseType = fake()->randomElement(ExerciseType::all());
            $instructor = fake()->randomElement(Instructor::all());
        }

        $maxCapacity = fake()->numberBetween(10, 20);

        return [
            'name' => "Clase de {$exerciseType->name}",
            'instructor_id' => $instructor,
            'exercise_type_id' => $exerciseType,
            'max_capacity' => $maxCapacity,
            'description' => fake()->paragraph()
        ];
    }
}
