<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id_level' => 1,
            'nama_lengkap' => 'Administrator',
            'email' => 'admin@ppkdjp.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
