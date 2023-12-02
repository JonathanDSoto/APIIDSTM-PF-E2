<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Fare;
use App\Models\Payment;
use App\Models\PaymentType;
use DateTime;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    private static $chanceOfNoPayment = 20;
    private static $minAmountOfPayments = 2;
    private static $maxAmountOfPayments = 10;
    private static $chanceOfPaymentMade = 95;

    public function run(): void
    {
        foreach (Customer::all() as $customer) {
            if (fake()->boolean(self::$chanceOfNoPayment)) {
                continue;
            }

            Payment::create([
                'customer_id' => $customer->id,
                'fare_id' => fake()->randomElement(Fare::all())->id,
                'payment_status_id' => 2,
                'payment_type_id' => fake()->randomElement(PaymentType::all())->id,
                'payment_datetime' => null
            ]);

            $numOfPayments = fake()->numberBetween(self::$minAmountOfPayments, self::$maxAmountOfPayments);

            for ($i = 0; $i < $numOfPayments; $i++) {
                $isPaymentMade = fake()->boolean(self::$chanceOfPaymentMade);
                $paymentStatus = $isPaymentMade ? 1 : 3;

                Payment::create([
                    'customer_id' => $customer->id,
                    'fare_id' => fake()->randomElement(Fare::all())->id,
                    'payment_status_id' => $paymentStatus,
                    'payment_type_id' => fake()->randomElement(PaymentType::all())->id,
                    'payment_datetime' => $this->generatePaymentDatetime($paymentStatus)
                ]);
            }
        }
    }

    private function generatePaymentDatetime(int $paymentStatus): ?DateTime
    {
        if ($paymentStatus === 1) {
            return fake()->dateTimeBetween(now()->subYears(2), now());
        }

        return null;
    }
}
