<?php

namespace Database\Seeders;

use App\Models\Session;
use App\Models\SessionDay;
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
                $startHour = fake()->numberBetween(7, 20);
                $endHour = $startHour + fake()->numberBetween(1, 2);
                $currentCapacity = fake()->numberBetween(0, $session->max_capacity);

                SessionDay::create([
                    'session_id' => $session->id,
                    'week_day_id' => $weekDay->id,
                    'start_hour' => $startHour,
                    'end_hour' => $endHour,
                    'current_capacity' => $currentCapacity
                ]);
            }
        }
    }
}
