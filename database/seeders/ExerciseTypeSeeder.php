<?php

namespace Database\Seeders;

use App\Models\ExerciseType;
use Illuminate\Database\Seeder;

class ExerciseTypeSeeder extends Seeder
{
    public function run(): void
    {
        $exerciseTypes = json_decode(file_get_contents('database/data/exerciseTypes.json'), true);

        foreach ($exerciseTypes as $exerciseType) {
            ExerciseType::create([
                'name' => $exerciseType['name']
            ]);
        }
    }
}
