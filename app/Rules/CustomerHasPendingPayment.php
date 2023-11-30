<?php

namespace App\Rules;

use App\Models\Payment;
use App\Models\PaymentStatus;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class CustomerHasPendingPayment implements ValidationRule
{
    protected $pendingId;

    public function __construct()
    {
        $this->pendingId = PaymentStatus::where('name', 'Pendiente')->first()->id;
    }
    
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (
            Payment::where('customer_id', $value)
                ->where('payment_status_id', $this->pendingId)
                ->exists()
        ) {
            $fail('Error al eliminar. El cliente seleccionado tiene pagos pendientes.');
        }
    }
}
