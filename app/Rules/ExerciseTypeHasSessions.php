<?php

namespace App\Rules;

use App\Models\ExerciseType;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ExerciseTypeHasSessions implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (ExerciseType::with('sessions')->where('instructor_id', $value)) {
            $fail('Hay clases asociadas al tipo de ejercicio seleccionado.');
        }
    }
}
