<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'code' => $this->code,
            'phone' => $this->phone,
            'emergency_phone' => $this->emergency_phone,
            'email' => $this->email,
            'blood_group' => new BloodGroupResource($this->whenLoaded('bloodGroup')),
            'is_active' => $this->is_active,
            'payments' => PaymentResource::collection($this->whenLoaded('payments')),
            'attended_sessions' => $this->whenLoaded('attendedSessions', function () {
                return SessionDayResource::collection($this->attendedSessions)->map(function ($session) {
                    return [
                        'session_day' => $session,
                        'attendance_date' => $session->pivot->attendance_date,
                        'attended' => $session->pivot->attended
                    ];
                })->sortByDesc('attendance_date');
            })
        ];
    }
}
