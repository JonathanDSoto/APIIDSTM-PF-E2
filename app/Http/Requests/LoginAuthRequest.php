<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginAuthRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'code' => ['bail', 'required', 'string', 'numeric', 'digits:6'],
            'password' => ['bail', 'required', 'string', 'between:8,255']
        ];
    }
}
