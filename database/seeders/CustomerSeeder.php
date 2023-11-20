<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 0; $i < 75; $i++) {
            Customer::factory()
                ->hasCheckingTimes(fake()->numberBetween(1, 150))
                ->create();
        }
    }
}
