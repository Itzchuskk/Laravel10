<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder

{

    public function run()
{
    User::firstOrCreate(
        ['email' => 'emorenoh02@gmail.com'],
        [
            'name' => 'Itzchuskk',
            'password' => Hash::make('Em1l14n0'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]
    );
}

}
