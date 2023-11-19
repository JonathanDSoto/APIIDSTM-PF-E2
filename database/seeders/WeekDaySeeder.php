<?php

namespace Database\Seeders;

use App\Models\WeekDay;
use Illuminate\Database\Seeder;

class WeekDaySeeder extends Seeder
{
    private $weekDays = [
        'Lunes',
        'Martes',
        'Miércoles',
        'Jueves',
        'Viernes',
        'Sábado',
        'Domingo'
    ];

    public function run(): void
    {
        foreach ($this->weekDays as $weekDay) {
            WeekDay::create(['name' => $weekDay]);
        }
    }
}
