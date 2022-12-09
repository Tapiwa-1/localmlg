<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert(
            [
                //admin
                [
                    'name' => 'Test User',
                    'email' => 'test@gmail.com',
                    'role'=>'admin',
                    'province'=>'Harare',
                    'password' => Hash::make('password'),
                ],
                //desk
                [
                    'name' => 'Desk1',
                    'email'=>'desk1@gmail.com',
                    'role'=>'townofficer',
                    'province'=>'Harare',
                    'password' => Hash::make('password'),
                ],
                [
                    'name' => 'Desk2',
                    'email'=>'desk2@gmail.com',
                    'role'=>'townofficer',
                    'province'=>'Bulawayo',
                    'password' => Hash::make('password'),
                ],
                [
                    'name' => 'Desk3',
                    'email'=>'desk3@gmail.com',
                    'role'=>'townofficer',
                    'province'=>'Manicaland',
                    'password' => Hash::make('password'),
                ],
                [
                    'name' => 'Desk4',
                    'email'=>'desk4@gmail.com',
                    'role'=>'townofficer',
                    'province'=>'Mashonaland_Cental',
                    'password' => Hash::make('password'),
                ],
                [
                    'name' => 'Desk5',
                    'email'=>'desk5@gmail.com',
                    'role'=>'townofficer',
                    'province'=>'Mashonaladn_East',
                    'password' => Hash::make('password'),
                ],
                [
                    'name' => 'Desk6',
                    'email'=>'desk6@gmail.com',
                    'role'=>'townofficer',
                    'province'=>'Mashonalad_West',
                    'password' => Hash::make('password'),
                ],
             [
                'name' => 'Desk7',
                'email'=>'desk7@gmail.com',
                'role'=>'townofficer',
                'province'=>'Masvingo',
                'password' => Hash::make('password'),
            ],
             [
                'name' => 'Desk8',
                'email'=>'desk8@gmail.com',
                'role'=>'Matebeland_North',
                'province'=>'Harare',
                'password' => Hash::make('password'),
            ],
             [
                'name' => 'Desk9',
                'email'=>'desk9@gmail.com',
                'role'=>'townofficer',
                'province'=>'Matebeleland_South',
                'password' => Hash::make('password'),
            ],
             [
                'name' => 'desk10',
                'email'=>'desk10@gmail.com',
                'role'=>'townofficer',
                'province'=>'Harare',
                'password' => Hash::make('password'),
            ],
                //province officers
                [
                    'name' => 'province1',
                    'email'=>'province1@gmail.com',
                    'role'=>'provincialofficer',
                    'province'=>'Harare',
                    'password' => Hash::make('password'),
                ],
                [
                    'name' => 'province2',
                    'email'=>'province2@gmail.com',
                    'role'=>'provincialofficer',
                    'province'=>'Bulawayo',
                    'password' => Hash::make('password'),
                ],
                [
                    'name' => 'province3',
                    'email'=>'province3@gmail.com',
                    'role'=>'provincialofficer',
                    'province'=>'Manicaland',
                    'password' => Hash::make('password'),
                ],
                [
                    'name' => 'province4',
                    'email'=>'province4@gmail.com',
                    'role'=>'provincialofficer',
                    'province'=>'Mashonaland_Cental',
                    'password' => Hash::make('password'),
                ],
                [
                    'name' => 'province5',
                    'email'=>'province5@gmail.com',
                    'role'=>'provincialofficer',
                    'province'=>'Mashonaladn_East',
                    'password' => Hash::make('password'),
                ],
                [
                    'name' => 'province6',
                    'email'=>'province6@gmail.com',
                    'role'=>'provincialofficer',
                    'province'=>'Mashonalad_West',
                    'password' => Hash::make('password'),
                ],
             [
                'name' => 'province7',
                'email'=>'province7@gmail.com',
                'role'=>'provincialofficer',
                'province'=>'Masvingo',
                'password' => Hash::make('password'),
            ],
             [
                'name' => 'province8',
                'email'=>'province8@gmail.com',
                'role'=>'Matebeland_North',
                'province'=>'Harare',
                'password' => Hash::make('password'),
            ],
             [
                'name' => 'province9',
                'email'=>'province9@gmail.com',
                'role'=>'provincialofficer',
                'province'=>'Matebeleland_South',
                'password' => Hash::make('password'),
            ],
             [
                'name' => 'province10',
                'email'=>'province10@gmail.com',
                'role'=>'provincialofficer',
                'province'=>'Harare',
                'password' => Hash::make('password'),
            ],
            ]

        );
    }
}
