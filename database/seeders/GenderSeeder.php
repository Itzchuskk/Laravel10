<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gender;
class GenderSeeder extends Seeder
{
    public function run ():void
    {
        gender::create([
            'name'=>'female',
            'name' => 'male',
            'name' => 'other'

        ]);
    }
}
