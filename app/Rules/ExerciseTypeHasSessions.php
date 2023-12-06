<?php

namespace App\Rules;

use App\Models\ExerciseType;
use App\Models\Session;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ExerciseTypeHasSessions implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (Session::where('exercise_type_id', $value)->exists()) {
            $fail('Hay clases asociadas al tipo de ejercicio seleccionado.');
        }
    }
}
