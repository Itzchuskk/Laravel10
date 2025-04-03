<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
        ]
    );
}

}
