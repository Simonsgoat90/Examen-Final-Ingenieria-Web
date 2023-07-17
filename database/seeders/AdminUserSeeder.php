<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'dni' => '123456789',
            'name' => 'Admin User',
            'phone_number' => '9876543210',
            'email' => 'admin@example.com',
            'password' => Hash::make('123456789'),
            'rol' => 'admin',
        ]);
    }
}
