<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class NewUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Adriana Pezo',
            'email' => 'info@draadrianapezo.com',
            'password' => Hash::make('@dr14n@P3z0##'),
        ])->assignRole('Admin');
    }
}
