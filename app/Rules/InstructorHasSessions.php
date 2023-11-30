<?php

namespace App\Rules;

use App\Models\Session;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class InstructorHasSessions implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (Session::where('instructor_id', $value)->exists()) {
            $fail('Error al eliminar. El instructor seleccionado tiene clases asignadas.');
        }
    }
}
