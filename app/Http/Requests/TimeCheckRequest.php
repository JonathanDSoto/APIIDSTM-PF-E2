<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TimeCheckRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function attributes(): array
    {
        return [
            'code' => 'código de cliente'
        ];
    }

    public function messages(): array
    {
        return [
            'code.exists' => 'El :attribute ingresado no es válido.'
        ];
    }

    public function rules(): array
    {
        return [
            'code' => ['bail', 'required', 'string', 'numeric', 'digits:6', 'exists:customers,code']
        ];
    }
}
