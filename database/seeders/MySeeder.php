<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class MySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            User::create(
                [
                    'name'=>'petar',
                    'email'=>'pp@p.p',
                    'password' => Hash::make('123')
                ]
                );
    }
}
