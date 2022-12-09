<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DistrictofficerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
              [
                    'name' => 'district1',
                    'email'=>'district1@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Harare',
                    'province' => 'Harare'
                ],
                [
                    'name' => 'district2',
                    'email'=>'district2@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Bulawayo',
                    'province' => 'Bulawayo'
                ],
                [
                    'name' => 'district3',
                    'email'=>'district3@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Buhera',
                    'province' =>'Manicaland'
                ],
                [
                    'name' => 'district4',
                    'email'=>'district4@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Chimanimani',
                    'province' =>'Manicaland'
                ],
                [
                    'name' => 'district5',
                    'email'=>'district5@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Chipinge',
                    'province' =>'Manicaland'
                ],
                [
                    'name' => 'district6',
                    'email'=>'district6@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Makoni',
                    'province' =>'Manicaland'
                ],
                [
                    'name' => 'district7',
                    'email'=>'district7@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Mutare',
                    'province' =>'Manicaland'
                ],
                [
                    'name' => 'district8',
                    'email'=>'district8@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Mutasa',
                    'province' =>'Manicaland'
                ],
                [
                    'name' => 'district9',
                    'email'=>'district9@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Nyanga',
                    'province' =>'Manicaland'
                ],
                [
                    'name' => 'district10',
                    'email'=>'district10@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Bindura',
                    'province' =>'Mashonaland_Cental'
                ],
                [
                    'name' => 'district11',
                    'email'=>'district11@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Guruve',
                    'province' =>'Mashonaland_Cental'
                ],
                [
                    'name' => 'district12',
                    'email'=>'district12@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Mazowe',
                    'province' =>'Mashonaland_Cental'
                ],
                [
                    'name' => 'district13',
                    'email'=>'district13@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Mbire',
                    'province' =>'Mashonaland_Cental'
                ],
                [
                    'name' => 'district14',
                    'email'=>'district14@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Mount Darwin',
                    'province' =>'Mashonaland_Cental'
                ],
                [
                    'name' => 'district15',
                    'email'=>'district15@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Muzarabani',
                    'province' =>'Mashonaland_Cental'
                ],
                [
                    'name' => 'district16',
                    'email'=>'district16@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Mukumbura',
                    'province' =>'Mashonaland_Cental'
                ],
                [
                    'name' => 'district17',
                    'email'=>'district17@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Rushinga',
                    'province' =>'Mashonaland_Cental'
                ],
                [
                    'name' => 'district18',
                    'email'=>'district18@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Shamva',
                    'province' =>'Mashonaland_Cental'
                ],
                [
                    'name' => 'district19',
                    'email'=>'district19@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Chikomba',
                    'province' => 'Mashonaland_East'
                ],
                [
                    'name' => 'district20',
                    'email'=>'district20@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Goromonzi',
                    'province' => 'Mashonaland_East'
                ],
                [
                    'name' => 'district21',
                    'email'=>'district21@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Marondera',
                    'province' => 'Mashonaland_East'
                ],
                [
                    'name' => 'district22',
                    'email'=>'district22@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Mudzi',
                    'province' => 'Mashonaland_East'
                ],
                [
                    'name' => 'district23',
                    'email'=>'district23@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Murehwa',
                    'province' => 'Mashonaland_East'
                ],
                [
                    'name' => 'district24',
                    'email'=>'district24@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Mutoko',
                    'province' => 'Mashonaland_East'
                ],
                [
                    'name' => 'district25',
                    'email'=>'district25@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Seke',
                    'province' => 'Mashonaland_East'
                ],
                [
                    'name' => 'district26',
                    'email'=>'district26@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'UMP (Uzumba-Maramba-Pfungwe)',
                    'province' => 'Mashonaland_East'
                ],
                [
                    'name' => 'district27',
                    'email'=>'district27@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Wedza (Hwedza)',
                    'province' => 'Mashonaland_East'
                ],
                [
                    'name' => 'district28',
                    'email'=>'district28@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Chegutu',
                    'province' => 'Mashonaland_West'
                ],
                [
                    'name' => 'district29',
                    'email'=>'district29@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Hurungwe',
                    'province' => 'Mashonaland_West'
                ],
                [
                    'name' => 'district30',
                    'email'=>'district30@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Kariba',
                    'province' => 'Mashonaland_West'
                ],
                [
                    'name' => 'district31',
                    'email'=>'district31@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Makonde',
                    'province' => 'Mashonaland_West'
                ],
                [
                    'name' => 'district32',
                    'email'=>'district32@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Mhondoro-Ngezi',
                    'province' => 'Mashonaland_West'
                ],
                [
                    'name' => 'district33',
                    'email'=>'district33@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Sanyati',
                    'province' => 'Mashonaland_West'
                ],
                [
                    'name' => 'district34',
                    'email'=>'district34@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Zvimba',
                    'province' => 'Mashonaland_West'
                ],
                [
                    'name' => 'district35',
                    'email'=>'district35@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Kadoma',
                    'province' => 'Mashonaland_West'
                ],
                [
                    'name' => 'district36',
                    'email'=>'district36@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Chinhoyi',
                    'province' => 'Mashonaland_West'
                ],
                [
                    'name' => 'district37',
                    'email'=>'district37@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Bikita',
                    'province' => 'Masvingo'
                ],
                [
                    'name' => 'district38',
                    'email'=>'district38@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Chiredzi',
                    'province' => 'Masvingo'
                ],
                [
                    'name' => 'district39',
                    'email'=>'district39@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Chivi',
                    'province' => 'Masvingo'
                ],
                [
                    'name' => 'district40',
                    'email'=>'district40@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Gutu',
                    'province' => 'Masvingo'
                ],
                [
                    'name' => 'district41',
                    'email'=>'district41@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Masvingo',
                    'province' => 'Masvingo'
                ],
                [
                    'name' => 'district42',
                    'email'=>'district42@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Mwenezi',
                    'province' => 'Masvingo'
                ],
                [
                    'name' => 'district43',
                    'email'=>'district43@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Zaka',
                    'province' => 'Masvingo'
                ],
                [
                    'name' => 'district44',
                    'email'=>'district44@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Binga',
                    'province' => 'Matebeleland_North'
                ],
                [
                    'name' => 'district45',
                    'email'=>'district45@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Bubi',
                    'province' => 'Matebeleland_North'
                ],
                [
                    'name' => 'district46',
                    'email'=>'district46@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Hwange',
                    'province' => 'Matebeleland_North'
                ],
                [
                    'name' => 'district47',
                    'email'=>'district47@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Lupane',
                    'province' => 'Matebeleland_North'
                ],
                [
                    'name' => 'district48',
                    'email'=>'district48@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Nkayi',
                    'province' => 'Matebeleland_North'
                ],
                [
                    'name' => 'district49',
                    'email'=>'district49@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Tsholotsho',
                    'province' => 'Matebeleland_North'
                ],
                [
                    'name' => 'district50',
                    'email'=>'district50@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Umguza',
                    'province' => 'Matebeleland_North'
                ],
                [
                    'name' => 'district51',
                    'email'=>'district51@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Beitbridge',
                    'province' => 'Matebeleland_South'
                ],
                [
                    'name' => 'district52',
                    'email'=>'district52@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Bulilima',
                    'province' => 'Matebeleland_South'
                ],
                [
                    'name' => 'district53',
                    'email'=>'district53@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Gwanda',
                    'province' => 'Matebeleland_South'
                ],
                [
                    'name' => 'district54',
                    'email'=>'district54@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Insiza',
                    'province' => 'Matebeleland_South'
                ],
                [
                    'name' => 'district55',
                    'email'=>'district55@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Mangwe',
                    'province' => 'Matebeleland_South'
                ],
                [
                    'name' => 'district56',
                    'email'=>'district56@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Matobo',
                    'province' => 'Matebeleland_South'
                ],
                [
                    'name' => 'district57',
                    'email'=>'district57@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Umzingwane',
                    'province' => 'Matebeleland_South'
                ],
                [
                    'name' => 'district58',
                    'email'=>'district58@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Chirumhanzu',
                    'province' => 'Midlands'
                ],
                [
                    'name' => 'district59',
                    'email'=>'district59@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Gokwe_North',
                    'province' => 'Midlands'
                ],
                [
                    'name' => 'district60',
                    'email'=>'district60@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Gokwe_South',
                    'province' => 'Midlands'
                ],
                [
                    'name' => 'district61',
                    'email'=>'district61@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Gweru',
                    'province' => 'Midlands'
                ],
                [
                    'name' => 'district62',
                    'email'=>'district62@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Kwekwe',
                    'province' => 'Midlands'
                ],
                [
                    'name' => 'district63',
                    'email'=>'district63@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Mberengwa',
                    'province' => 'Midlands'
                ],
                [
                    'name' => 'district64',
                    'email'=>'district64@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Shurugwi',
                    'province' => 'Midlands'
                ],
                [
                    'name' => 'district65',
                    'email'=>'district65@gmail.com',
                    'role'=>'districtofficer',
                    'password' => Hash::make('password'),
                    'district' => 'Zvishavane',
                    'province' => 'Midlands'
                ],
        ]);
    }
}
