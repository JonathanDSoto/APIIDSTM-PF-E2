<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SessionDayResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'session' => new SessionResource($this->whenLoaded('session')),
            'instructor' => new InstructorResource($this->whenLoaded('instructor')),
            'participants' => $this->whenLoaded('participants', function () {
                return CustomerResource::collection($this->participants)->map(function ($participant) {
                    return [
                        'customer' => $participant,
                        'subscription_date' => $participant->pivot->subscription_date
                    ];
                });
            }),
            'week_day' => new WeekDayResource($this->whenLoaded('weekDay')),
            'start_hour' => $this->start_hour,
            'end_hour' => $this->end_hour,
            'current_capacity' => $this->current_capacity
        ];
    }
}
