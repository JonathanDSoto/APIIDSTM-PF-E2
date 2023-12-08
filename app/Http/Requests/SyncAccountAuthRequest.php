<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SyncAccountAuthRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => ['bail', 'required', 'email', 'max:255'],
            'code' => ['bail', 'required', 'string', 'numeric', 'digits:6'],
            'password' => ['bail', 'required', 'between:8,255']
        ];
    }
}
