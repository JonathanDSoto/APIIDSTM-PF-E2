<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Validation\Rule;

class IsCustomerActive implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (Rule::exists('customers', 'id')->where('is_active', 1)) {
            $fail('El cliente seleccionado está inactivo.');
        }
    }
}
