<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\SessionDay;
use Illuminate\Database\Seeder;

class SessionParticipantSeeder extends Seeder
{
    public function run(): void
    {
        foreach (SessionDay::all() as $sessionDay) {
            foreach(
                Customer::inRandomOrder()
                    ->take($sessionDay->current_capacity)
                    ->get() as $customer
            ) {
                $subscriptionDate = fake()->dateTimeBetween(now()->subMonths(6), now());
                $sessionDay->participants()
                    ->attach($customer->id, ['subscription_date' => $subscriptionDate]);
            }
        }
    }
}
