<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//      DB::table('users')->insert([
//          'name'=>'Luong Quoc Tuan',
//          'phone'=>'0123456789',
//          'email'=>'luongquoctuan@gmail.com',
//          'password'=>Hash::make('28092000'),
//          'role'=>'admin'
//      ]);

        DB::table('users')->insert([
            'name'=>'Luu Van Dai',
            'phone'=>'1255673982',
            'email'=>'luudaibg@gmail.com',
            'password'=>Hash::make('luudaibg'),
            'role'=>'users'
        ]);

    }
}
