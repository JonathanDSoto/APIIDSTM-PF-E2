<?php

namespace Database\Seeders;

use App\Models\BloodGroup;
use Illuminate\Database\Seeder;

class BloodGroupSeeder extends Seeder
{
    public function run(): void
    {
        BloodGroup::factory(8)->create();
    }
}
