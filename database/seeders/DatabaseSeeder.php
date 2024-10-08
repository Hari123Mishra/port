<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
                "name"=>"test",
                'email'=>"test@gmail.com",
                "password"=> Hash::make("1234567"),
        ]);
        $this->call(RoleSeeder::class);
        $this->call(AdminSeeder::class);
    }
}
