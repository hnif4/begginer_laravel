<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Mengosongkan tabel users jika diperlukan
        User::truncate();

        // Menambahkan data pengguna
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'email_verified_at' => now(),
        ]);

        User::create([
            'name' => 'user1',
            'email' => 'siti@gmail.com',
            'password' => Hash::make('1234'),
            'email_verified_at' => now(),
        ]);

        User::create([
            'name' => 'user2',
            'email' => 'nur@gmail.com',
            'password' => Hash::make('123'),
            'email_verified_at' => now(),
        ]);

        User::create([
            'name' => 'user3',
            'email' => 'hanifah@gmail.com',
            'password' => Hash::make('1234567'),
            'email_verified_at' => now(),
        ]);
    }
}
