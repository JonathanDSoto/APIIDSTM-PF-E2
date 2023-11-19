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

        $startHour = fake()->numberBetween(7, 18);
        $endHour = $startHour + fake()->numberBetween(1, 2);
        $maxCapacity = fake()->numberBetween(10, 20);
        $currentCapacity = fake()->numberBetween(0, $maxCapacity);

        return [
            'name' => "Clase de {$exerciseType->name}",
            'start_hour' => $startHour,
            'end_hour' => $endHour,
            'instructor_id' => $instructor,
            'current_capacity' => $currentCapacity,
            'exercise_type_id' => $exerciseType,
            'max_capacity' => $maxCapacity,
            'description' => fake()->paragraph()
        ];
    }
}
