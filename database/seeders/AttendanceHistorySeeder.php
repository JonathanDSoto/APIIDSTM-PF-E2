<?php

namespace Database\Seeders;

use App\Models\WeekDay;
use DateInterval;
use DatePeriod;
use DateTime;
use Illuminate\Database\Seeder;

class AttendanceHistorySeeder extends Seeder
{
    public function run(): void
    {
        $dateInterval = new DateInterval('P1D');

        foreach (WeekDay::all() as $weekDay) {
            foreach ($weekDay->sessionDays as $sessionDay) {
                foreach ($sessionDay->participants as $participant) {
                    $subscriptionDate = new DateTime($participant->pivot->subscription_date);
                    $datePeriod = new DatePeriod($subscriptionDate, $dateInterval, now());

                    foreach ($datePeriod as $date) {
                        if (fake()->boolean(40)) {
                            continue;
                        }

                        if ($date->format('N') == $weekDay->id) {
                            $participant->attendedSessions()->attach($sessionDay, [
                                'attendance_date' => $date,
                                'attended' => fake()->boolean()
                            ]);
                        }
                    }
                }
            }
        }
    }
}
