<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            BloodGroupSeeder::class,
            CustomerSeeder::class,
            PaymentStatusSeeder::class,
            PaymentTypeSeeder::class,
            FarePeriodSeeder::class,
            FareSeeder::class,
            PaymentSeeder::class,
            ExerciseTypeSeeder::class,
            InstructorSeeder::class,
            InstructorQualificationSeeder::class,
            SessionSeeder::class,
            WeekDaySeeder::class,
            SessionDaySeeder::class,
            SessionParticipantSeeder::class,
            AttendanceHistorySeeder::class
        ]);
    }
}
