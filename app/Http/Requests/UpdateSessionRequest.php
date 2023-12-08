<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSessionRequest extends FormRequest
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
            'name' => ['bail', $mustRule, 'string', 'between:3,255', "unique:sessions,name,{$id}"],
            'max_capacity' => ['bail', $mustRule, 'integer', 'min:5'],
            'description' => ['bail', $mustRule, 'string', 'min:10'],
            'session_days' => ['bail', $mustRule, 'array'],
            'session_days.*.id' => ['bail', 'sometimes', 'integer', 'nullable', 'exists:session_days,id'],
            'session_days.*.instructor_id' => ['bail', $mustRule, 'integer', 'exists:instructors,id'],
            'session_days.*.week_day_id' => ['bail', $mustRule, 'integer', 'exists:week_days,id'],
            'session_days.*.start_hour' => ['bail', $mustRule, 'integer', 'between:0,23'],
            'session_days.*.end_hour' => ['bail', $mustRule, 'integer', 'gt:session_days.*.start_hour', 'between:0,23'],
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'session_days' => json_decode($this->session_days, true)
        ]);
    }
}
