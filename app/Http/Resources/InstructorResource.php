<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InstructorResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'phone' => $this->phone,
            'emergency_phone' => $this->emergency_phone,
            'email' => $this->email,
            'blood_group' => new BloodGroupResource($this->whenLoaded('bloodGroup')),
            'is_active' => $this->is_active
        ];
    }
}
