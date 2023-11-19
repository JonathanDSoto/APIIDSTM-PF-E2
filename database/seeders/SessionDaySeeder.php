<?php

namespace Database\Seeders;

use App\Models\Session;
use App\Models\WeekDay;
use Illuminate\Database\Seeder;

class SessionDaySeeder extends Seeder
{
    public function run(): void
    {
        foreach (Session::all() as $session) {
            foreach(
                WeekDay::inRandomOrder()
                    ->take(fake()->numberBetween(1, 3))
                    ->get() as $weekDay
            ) {
                $session->sessionDays()->attach($weekDay);
            }
        }
    }
}
