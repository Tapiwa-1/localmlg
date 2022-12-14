<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Headman;
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
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@gmail.com',
        //     'password' => Hash::make('test@123'),
        // ]);

        $this->call([
            UserSeeder::class,
            DistrictSeeder::class,
            DistrictofficerSeeder::class,
            ChiefSeeder::class,
            HeadmanSeeder::class
        ]);
    }
}
