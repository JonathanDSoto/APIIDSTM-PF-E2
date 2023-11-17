<?php

namespace Database\Seeders;

use App\Models\PaymentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentTypeSeeder extends Seeder
{
    public function run(): void
    {
        $paymentTypes = json_decode(file_get_contents('database/data/paymentTypes.json'), true);

        foreach ($paymentTypes as $paymentType) {
            PaymentType::create([
                'name' => $paymentType['name']
            ]);
        }
    }
}
