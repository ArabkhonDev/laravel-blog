<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $user = User::create([
            'name'=> 'Abdulloh',
            'email'=> 'abdulloh@gmail.com',
            'password'=> Hash::make('secret'),
        ]);

        $user->roles()->attach([1, 2]);

        $user2 = User::create([
            'name'=> 'Hayrulloh',
            'email'=> 'hayrullo@gmail.com',
            'password'=> Hash::make('secret'),
        ]);

        $user2->roles()->attach([3]);
    }
}
