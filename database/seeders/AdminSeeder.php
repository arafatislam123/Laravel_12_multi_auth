<?php

namespace Database\Seeders;

use Hash;
use App\Models\User;
use App\Enums\UserRole;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => "Admin User",
            "email" => "admin@gmail.com",
            "role" => UserRole::Admin,
            "password" => Hash::make("12345678")


        ]);
    }
}
