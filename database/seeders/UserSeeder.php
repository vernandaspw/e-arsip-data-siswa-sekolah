<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'nama' => 'admin',
                'username' => 'admin',
                'password' => Hash::make('admin'),
                'role' => 'admin',
            ],
            [
                'nama' => 'kepala sekolah',
                'username' => 'kepalasekolah',
                'password' => Hash::make('kepalasekolah'),
                'role' => 'kepala sekolah',
            ],
        ]);
    }
}
