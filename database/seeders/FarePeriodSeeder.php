<?php

namespace Database\Seeders;

use App\Models\FarePeriod;
use Illuminate\Database\Seeder;

class FarePeriodSeeder extends Seeder
{
    public function run(): void
    {
        $farePeriods = json_decode(file_get_contents('database/data/farePeriods.json'), true);

        foreach ($farePeriods as $farePeriod) {
            FarePeriod::create([
                'name' => $farePeriod['name']
            ]);
        }
    }
}
