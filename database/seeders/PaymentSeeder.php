<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Fare;
use App\Models\Payment;
use App\Models\PaymentStatus;
use App\Models\PaymentType;
use DateTime;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    public function run(): void
    {
        $pendingStatusId = PaymentStatus::where('name', 'Pendiente')->first()->id;

        foreach (Customer::all() as $customer) {
            if (fake()->boolean(40)) {
                continue;
            }

            Payment::create([
                'customer_id' => $customer->id,
                'fare_id' => fake()->randomElement(Fare::all())->id,
                'payment_status_id' => $pendingStatusId,
                'payment_type_id' => fake()->randomElement(PaymentType::all())->id,
                'payment_datetime' => null
            ]);

            for ($i = 0; $i < fake()->numberBetween(0, 5); $i++) {
                $paymentStatus = fake()
                    ->randomElement(PaymentStatus::whereNotIn('id', [$pendingStatusId])->get());

                Payment::create([
                    'customer_id' => $customer->id,
                    'fare_id' => fake()->randomElement(Fare::all())->id,
                    'payment_status_id' => $paymentStatus->id,
                    'payment_type_id' => fake()->randomElement(PaymentType::all())->id,
                    'payment_datetime' => $this->generatePaymentDatetime($paymentStatus)
                ]);
            }
        }
    }

    private function generatePaymentDatetime(Object $paymentStatus): DateTime|null
    {
        if ($paymentStatus->id === PaymentStatus::where('name', 'Pagado')->first()->id) {
            return fake()->dateTimeBetween(now()->subMonths(6), now()->subMonth());
        }

        return null;
    }
}
