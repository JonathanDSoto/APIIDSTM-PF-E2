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
            'phone' => ['bail', 'string', 'numeric', 'digits:10', "unique:customers,phone,{$id}", 'nullable'],
            'emergency_phone' => [$mustRule, 'string', 'numeric', 'digits:10', 'different:phone'],
            'email' => ['bail', $mustRule, 'email', 'max:255', "unique:customers,email,{$id}"],
            'blood_group_id' => ['bail', $mustRule, 'integer', 'exists:blood_groups,id'],
            'is_active' => ['bail', $mustRule, 'integer', Rule::in([0, 1])]
        ];
    }
}
