<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSessionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['bail', 'required', 'string', 'between:3,255', 'unique:sessions,name'],
            'exercise_type_id' => ['bail', 'required', 'integer', 'exists:exercise_types,id'],
            'max_capacity' => ['bail', 'required', 'integer', 'min:5'],
            'description' => ['bail', 'required', 'string', 'min:10'],
            'session_days' => ['bail', 'required', 'array'],
            'session_days.*.instructor_id' => ['bail', 'required', 'integer', 'exists:instructors,id'],
            'session_days.*.week_day_id' => ['bail', 'required', 'integer', 'exists:week_days,id'],
            'session_days.*.start_hour' => ['bail', 'required', 'integer', 'between:0,23'],
            'session_days.*.end_hour' => ['bail', 'required', 'integer', 'gt:session_days.*.start_hour', 'between:0,23'],
        ];
    }
    
    public function prepareForValidation()
    {
        $this->merge([
            'session_days' => json_decode($this->session_days, true)
        ]);
    }
}
