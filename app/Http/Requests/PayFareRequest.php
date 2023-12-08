<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PayFareRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'customer_id' => ['bail', 'required', 'integer', 'exists:customers,id'],
            'fare_id' => ['bail', 'required', 'integer', 'exists:fares,id'],
            'payment_type_id' => ['bail', 'required', 'integer', 'exists:payment_types,id']
        ];
    }
}
