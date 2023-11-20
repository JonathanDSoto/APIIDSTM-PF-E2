<?php

namespace Database\Factories;

use App\Models\Customer;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

class TimeCheckFactory extends Factory
{
    private $openHour = 7 * 60 * 60; // 07:00
    private $closeHour = 22 * 60 * 60 + 30 * 60; // 22:30

    public function definition(): array
    {
        $maxTimeIn = $this->closeHour - 30 * 60;
        $timeIn = fake()->numberBetween($this->openHour, $maxTimeIn);
        $minWorkoutTime = $timeIn + 30 * 60;
        $maxWorkoutTime = $timeIn + 2 * 60 * 60;
        $maxTimeOut = fake()->numberBetween($minWorkoutTime, min($maxWorkoutTime, $this->closeHour));
        $timeOut = fake()->numberBetween($minWorkoutTime, $maxTimeOut);
        $checkDate = fake()->dateTimeThisYear();

        return [
            'customer_id' => Customer::factory(),
            'time_in' => gmdate('H:i:s', $timeIn),
            'time_out' => gmdate('H:i:s', $timeOut),
            'check_date' => $checkDate
        ];
    }
}
