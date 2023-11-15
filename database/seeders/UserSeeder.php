<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = json_decode(file_get_contents('database/data/users.json'), true);

        foreach ($users as $user) {
            User::create([
                'name'=> $user['name'],
                'email'=> $user['email'],
                'password' => Hash::make($user['password'] ?? 'secret')
            ]);
        }
    }
}
