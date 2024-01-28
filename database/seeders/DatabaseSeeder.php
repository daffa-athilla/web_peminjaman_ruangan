<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Form;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'username'      => 'admin',
            'password'      => 'admin',
            'email_address' => 'admin@teknokrat.ac.id',
            'is_admin'      => 1,
        ]);
    }
}