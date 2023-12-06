<?php

namespace App\Rules;

use App\Models\ExerciseType;
use App\Models\Instructor;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ExerciseTypeHasInstructors implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (
            Instructor::whereHas('exerciseTypes', function ($exerciseTypes) use ($value) {
                $exerciseTypes->where('exercise_type_id', $value);
            })->exists()
        ) {
            $fail('Hay instructores asociados al tipo de ejercicio seleccionado.');
        }
    }
}
