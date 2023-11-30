<?php

namespace App\Rules;

use App\Models\Fare;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class FarePeriodInUse implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (Fare::where('fare_period_id', $value)->exists()) {
            $fail('No es posible tener más de una tarifa por periodo.');
        }
    }
}
