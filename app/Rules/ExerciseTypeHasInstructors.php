<?php

namespace App\Rules;

use App\Models\ExerciseType;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ExerciseTypeHasInstructors implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (ExerciseType::wherePivot('instructor_id', $value)) {
            $fail('Hay instructores asociados al tipo de ejercicio seleccionado.');
        }
    }
}
