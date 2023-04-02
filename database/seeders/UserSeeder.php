<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('users')->insert([
            'name' => 'oittizzo',
            'email' => 'oittizzo@gmail.com',
            'phone' => '01727867146',
            'password' => Hash::make('password'),
            'address' => 'chatmohar, pabna',
        ],[
            'name' => 'mehejabul',
            'email' => 'mehejabul@gmail.com',
            'phone' => '01770011711',
            'password' => Hash::make('password'),
            'address' => 'pabna',
        ]);
    }
}
