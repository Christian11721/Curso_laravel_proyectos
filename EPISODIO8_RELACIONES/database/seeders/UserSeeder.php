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
            'id'=>1,
            'name'=>'Juan',
            'email'=>'info.com',
            'password'=>Hash::make('1234'),
        ]);
         User::create([
            'id'=>2,
            'name'=>'Mario',
            'email'=>'info@fef.com',
            'password'=>Hash::make('4526'),
        ]);
         User::create([
            'id'=>3,
            'name'=>'Luis',
            'email'=>'info.comfrgr',
            'password'=>Hash::make('33124'),
        ]);
    }
}
