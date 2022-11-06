<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProvincialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provincials')->insert(
            [
                ['name' => 'Harare'],
                ['name' => 'Bulawayo'],
                ['name' => 'Manicaland'],
                ['name' => 'Mashonaland Central'],
                ['name' => 'Mashonaland East'],
                ['name' => 'Mashonaland West'],
                ['name' => 'Masvingo'],
                ['name' => 'Matabeleland North'],
                ['name' => 'Matabeleland South'],
                ['name' => 'Midlands'],
            ]
        );
    }
}
