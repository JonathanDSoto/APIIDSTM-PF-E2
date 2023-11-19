<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Session;
use Illuminate\Database\Seeder;

class SessionParticipantSeeder extends Seeder
{
    public function run(): void
    {
        foreach (Session::all() as $session) {
            foreach(
                Customer::inRandomOrder()
                    ->take($session->current_capacity)
                    ->get() as $customer
            ) {
                $subscriptionDate = fake()->dateTimeBetween(now()->subMonths(6), now());
                $session->participants()
                    ->attach($customer->id, ['subscription_date' => $subscriptionDate]);
            }
        }
    }
}
