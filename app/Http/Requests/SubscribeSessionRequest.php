<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubscribeSessionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'customer_id' => ['bail', 'required', 'integer', 'exists:customers,id'],
            'session_day_id' => ['bail', 'required', 'integer', 'exists:session_days,id']
        ];
    }
}
