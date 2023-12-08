<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpAuthRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'not_regex:/\d/', 'max:255'],
            'phone' => ['integer', 'unique:customers,phone', 'digits:10'],
            'emergency_phone' => ['required', 'integer', 'different:phone', 'digits:10'],
            'email' => ['bail', 'required', 'email', 'unique:customers,email', 'nullable', 'max:255'],
            'blood_group_id' => ['bail', 'required', 'integer', 'exists:blood_groups,id'],
            'password' => ['bail', 'required', 'string', 'between:8,255']
        ];
    }
}
