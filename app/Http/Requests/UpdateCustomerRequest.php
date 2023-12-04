<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCustomerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $mustRule = $this->method() === 'PUT' ? 'required' : 'sometimes';
        $id = $this->route('id');

        return [
            'name' => [$mustRule, 'string', 'not_regex:/\d/', 'max:255'],
            'phone' => ['bail', 'integer', 'digits:10', "unique:customers,phone,{$id}"],
            'emergency_phone' => [$mustRule, 'integer', 'different:phone', 'digits:10'],
            'email' => ['bail', $mustRule, 'email', "unique:customers,email,{$id}", 'nullable', 'max:255'],
            'blood_group_id' => ['bail', $mustRule, 'integer', 'exists:blood_groups,id'],
            'is_active' => ['bail', $mustRule, 'integer', Rule::in([0, 1])]
        ];
    }
}
