<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PaymentResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'customer' => new CustomerResource($this->whenLoaded('customer')),
            'fare' => new FareResource($this->whenLoaded('fare')),
            'payment_status' => new PaymentStatusResource($this->whenLoaded('paymentStatus')),
            'payment_type' => new PaymentTypeResource($this->whenLoaded('paymentType')),
            'payment_datetime' => $this->payment_datetime
        ];
    }
}
