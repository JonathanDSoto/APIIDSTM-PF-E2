<?php

namespace Database\Seeders;

use App\Models\Fare;
use Illuminate\Database\Seeder;

class FareSeeder extends Seeder
{
    public function run(): void
    {
        $fares = json_decode(file_get_contents('database/data/fares.json'), true);

        foreach ($fares as $fare) {
            Fare::create([
                'fare_period_id' => $fare['fare_period_id'],
                'price' => $fare['price'],
                'is_active' => $fare['is_active']
            ]);
        }
    }
}
