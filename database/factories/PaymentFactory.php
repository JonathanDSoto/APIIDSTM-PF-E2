<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Fare;
use App\Models\PaymentStatus;
use App\Models\PaymentType;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    public function definition(): array
    {
        $paymentStatus = fake()->randomElement(PaymentStatus::all());

        return [
            'customer_id' => fake()->randomElement(Customer::all()),
            'fare_id' => fake()->randomElement(Fare::all()),
            'payment_status_id' => $paymentStatus,
            'payment_type_id' => fake()->randomElement(PaymentType::all()),
            'payment_datetime' => $this->generatePaymentDatetime($paymentStatus)
        ];
    }

    private function generatePaymentDatetime(Object $paymentStatus): DateTime|null
    {
        if ($paymentStatus->id === PaymentStatus::where('name', 'Pagado')->first()->id) {
            return fake()->dateTimeBetween(now()->subMonths(6), now()->addMonths(6));
        }

        return null;
    }
}
