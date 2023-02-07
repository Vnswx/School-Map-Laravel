<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Admin TB',
            'email' => 'tarunabhakti@gmail.com',
            'password' => bcrypt('tarunabhakti'),
            'remember_token' => Str::random(60),
        ]);
    }
}
