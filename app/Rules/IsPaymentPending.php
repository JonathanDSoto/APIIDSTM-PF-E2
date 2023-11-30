<?php

namespace App\Rules;

use App\Models\PaymentStatus;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class IsPaymentPending implements ValidationRule
{
    protected $pendingId;

    public function __construct()
    {
        $this->pendingId = PaymentStatus::where('name', 'Pendiente')->first()->id;
    }

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if ($value !== $this->pendingId) {
            $fail('No es posible actualizar el estado del pago seleccionado.');
        }
    }
}
