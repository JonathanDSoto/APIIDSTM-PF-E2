<?php

namespace Database\Seeders;

use App\Models\ExerciseType;
use App\Models\Instructor;
use Illuminate\Database\Seeder;

class InstructorQualificationSeeder extends Seeder
{
    private $rows = 50;

    public function run(): void
    {
        for ($i = 0; $i < $this->rows;  $i++) {
            $instructor = Instructor::inRandomOrder()->first();
            $exerciseType = ExerciseType::inRandomOrder()->first();

            $instructor->exerciseTypes()->syncWithoutDetaching([$exerciseType->id]);
        }
    }
}
