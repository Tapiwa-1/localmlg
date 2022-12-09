<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChiefSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('chiefs')->insert([
            [
                'district' => 'Harare',
                'province' => 'Harare',
                'chieftainship' => 'Harare1',
                'mutupo' => 'Harare1',
                'incumbent' => 'Harare1',
                'idnumber' => '1',
                'ecnumber' => 'Harare1',
                'gender' => 'male',
                'dateofappointment' => '2022-12-14',
                'dateofbirth' => '2022-12-14',
                'status' => 'active',
                'numberofvillages'=>'22',
                'contactnumber' => '077777777',
                'numberofheadman' => '12',
                'numberofwards' => '3',
                'physicalladdress' => 'Address',
                'slug' => 'Harare1',
                'created_at' => '2022-12-06 11:32:28',
                'updated_at' => '2022-12-06 11:32:28',
            ],
             [
                'district' => 'Bulawayo',
                'province' => 'Bulawayo',
                'chieftainship' => 'Bulawayo1',
                'mutupo' => 'Bulawayo1',
                'incumbent' => 'Bulawayo1',
                'idnumber' => '1',
                'ecnumber' => 'Bulawayo1',
                'gender' => 'male',
                'dateofappointment' => '2022-12-14',
                'dateofbirth' => '2022-12-14',
                'status' => 'active',
                'numberofvillages'=>'22',
                'contactnumber' => '077777777',
                'numberofheadman' => '12',
                'numberofwards' => '3',
                'physicalladdress' => 'Address',
                'slug' => 'Bulawayo1',
                'created_at' => '2022-12-06 11:32:28',
                'updated_at' => '2022-12-06 11:32:28',
             ],

        ]);

    }
}
