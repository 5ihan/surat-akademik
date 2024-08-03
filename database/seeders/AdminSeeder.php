<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admin')->insert([
            [
                'username' => 'admin1',
                'password' => bcrypt('password1'), // Menggunakan bcrypt untuk password
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'admin2',
                'password' => bcrypt('password2'), // Menggunakan bcrypt untuk password
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
