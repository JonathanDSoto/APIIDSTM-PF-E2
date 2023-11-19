<?php

namespace Database\Seeders;

use App\Models\PaymentStatus;
use Illuminate\Database\Seeder;

class PaymentStatusSeeder extends Seeder
{
    public function run(): void
    {
        $paymentStatus = json_decode(file_get_contents('database/data/paymentStatus.json'), true);

        foreach ($paymentStatus as $_paymentStatus) {
            PaymentStatus::create([
                'name' => $_paymentStatus['name']
            ]);
        }
    }
}
