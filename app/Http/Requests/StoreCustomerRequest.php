<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCustomerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'not_regex:/\d/', 'max:255'],
            'phone' => ['string', 'numeric', 'digits:10', 'unique:customers,phone', 'nullable'],
            'emergency_phone' => ['required', 'string', 'numeric', 'digits:10', 'different:phone'],
            'email' => ['bail', 'required', 'email', 'max:255', 'unique:customers,email', ],
            'blood_group_id' => ['bail', 'required', 'integer', 'exists:blood_groups,id'],
            'is_active' => ['bail', 'required', 'integer', Rule::in([0, 1])]
        ];
    }
}
