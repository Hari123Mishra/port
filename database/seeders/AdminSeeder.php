<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user= User::create([
            "name"=>"admin",
            "email"=>"hari@thesileo.com",
            "email_verified_at"=>now(),
            "password"=>Hash::make(12345678),
        ]);

        $user->assignRole( 'writer','admin');
        
    }
}
