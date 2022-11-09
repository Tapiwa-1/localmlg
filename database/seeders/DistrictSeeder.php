<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('districts')->insert(
            [
                [
                    'name' => 'Harare',
                    'province' => 'Harare'
                ],
                [
                    'name' => 'Bulawayo',
                    'province' => 'Bulawayo'
                ],
                [
                    'name' => 'Buhera',
                    'province' =>'Manicaland'
                ],
                [
                    'name' => 'Chimanimani',
                    'province' =>'Manicaland'
                ],
                [
                    'name' => 'Chipinge',
                    'province' =>'Manicaland'
                ],
                [
                    'name' => 'Makoni',
                    'province' =>'Manicaland'
                ],
                [
                    'name' => 'Mutare',
                    'province' =>'Manicaland'
                ],
                [
                    'name' => 'Mutasa',
                    'province' =>'Manicaland'
                ],
                [
                    'name' => 'Nyanga',
                    'province' =>'Manicaland'
                ],
                [
                    'name' => 'Bindura',
                    'province' =>'Mashonaland_Cental'
                ],
                [
                    'name' => 'Guruve',
                    'province' =>'Mashonaland_Cental'
                ],
                [
                    'name' => 'Mazowe',
                    'province' =>'Mashonaland_Cental'
                ],
                [
                    'name' => 'Mbire',
                    'province' =>'Mashonaland_Cental'
                ],
                [
                    'name' => 'Mount Darwin',
                    'province' =>'Mashonaland_Cental'
                ],
                [
                    'name' => 'Muzarabani',
                    'province' =>'Mashonaland_Cental'
                ],
                [
                    'name' => 'Mukumbura',
                    'province' =>'Mashonaland_Cental'
                ],
                [
                    'name' => 'Rushinga',
                    'province' =>'Mashonaland_Cental'
                ],
                [
                    'name' => 'Shamva',
                    'province' =>'Mashonaland_Cental'
                ],
                [
                    'name' => 'Chikomba',
                    'province' => 'Mashonaland_East'
                ],
                [
                    'name' => 'Goromonzi',
                    'province' => 'Mashonaland_East'
                ],
                [
                    'name' => 'Marondera',
                    'province' => 'Mashonaland_East'
                ],
                [
                    'name' => 'Mudzi',
                    'province' => 'Mashonaland_East'
                ],
                [
                    'name' => 'Murehwa',
                    'province' => 'Mashonaland_East'
                ],
                [
                    'name' => 'Mutoko',
                    'province' => 'Mashonaland_East'
                ],
                [
                    'name' => 'Seke',
                    'province' => 'Mashonaland_East'
                ],
                [
                    'name' => 'UMP (Uzumba-Maramba-Pfungwe)',
                    'province' => 'Mashonaland_East'
                ],
                [
                    'name' => 'Wedza (Hwedza)',
                    'province' => 'Mashonaland_East'
                ],
                [
                    'name' => 'Chegutu',
                    'province' => 'Mashonaland_West'
                ],
                [
                    'name' => 'Hurungwe',
                    'province' => 'Mashonaland_West'
                ],
                [
                    'name' => 'Kariba',
                    'province' => 'Mashonaland_West'
                ],
                [
                    'name' => 'Makonde',
                    'province' => 'Mashonaland_West'
                ],
                [
                    'name' => 'Mhondoro-Ngezi',
                    'province' => 'Mashonaland_West'
                ],
                [
                    'name' => 'Sanyati',
                    'province' => 'Mashonaland_West'
                ],
                [
                    'name' => 'Zvimba',
                    'province' => 'Mashonaland_West'
                ],
                [
                    'name' => 'Kadoma',
                    'province' => 'Mashonaland_West'
                ],
                [
                    'name' => 'Chinhoyi',
                    'province' => 'Mashonaland_West'
                ],
                [
                    'name' => 'Bikita',
                    'province' => 'Masvingo'
                ],
                [
                    'name' => 'Chiredzi',
                    'province' => 'Masvingo'
                ],
                [
                    'name' => 'Chivi',
                    'province' => 'Masvingo'
                ],
                [
                    'name' => 'Gutu',
                    'province' => 'Masvingo'
                ],
                [
                    'name' => 'Masvingo',
                    'province' => 'Masvingo'
                ],
                [
                    'name' => 'Mwenezi',
                    'province' => 'Masvingo'
                ],
                [
                    'name' => 'Zaka',
                    'province' => 'Masvingo'
                ],
                [
                    'name' => 'Binga',
                    'province' => 'Matebeleland_North'
                ],
                [
                    'name' => 'Bubi',
                    'province' => 'Matebeleland_North'
                ],
                [
                    'name' => 'Hwange',
                    'province' => 'Matebeleland_North'
                ],
                [
                    'name' => 'Lupane',
                    'province' => 'Matebeleland_North'
                ],
                [
                    'name' => 'Nkayi',
                    'province' => 'Matebeleland_North'
                ],
                [
                    'name' => 'Tsholotsho',
                    'province' => 'Matebeleland_North'
                ],
                [
                    'name' => 'Umguza',
                    'province' => 'Matebeleland_North'
                ],
                [
                    'name' => 'Beitbridge',
                    'province' => 'Matebeleland_South'
                ],
                [
                    'name' => 'Bulilima',
                    'province' => 'Matebeleland_South'
                ],
                [
                    'name' => 'Gwanda',
                    'province' => 'Matebeleland_South'
                ],
                [
                    'name' => 'Insiza',
                    'province' => 'Matebeleland_South'
                ],
                [
                    'name' => 'Mangwe',
                    'province' => 'Matebeleland_South'
                ],
                [
                    'name' => 'Matobo',
                    'province' => 'Matebeleland_South'
                ],
                [
                    'name' => 'Umzingwane',
                    'province' => 'Matebeleland_South'
                ],
                [
                    'name' => 'Chirumhanzu',
                    'province' => 'Midlands'
                ],
                [
                    'name' => 'Gokwe_North',
                    'province' => 'Midlands'
                ],
                [
                    'name' => 'Gokwe_South',
                    'province' => 'Midlands'
                ],
                [
                    'name' => 'Gweru',
                    'province' => 'Midlands'
                ],
                [
                    'name' => 'Kwekwe',
                    'province' => 'Midlands'
                ],
                [
                    'name' => 'Mberengwa',
                    'province' => 'Midlands'
                ],
                [
                    'name' => 'Shurugwi',
                    'province' => 'Midlands'
                ],
                [
                    'name' => 'Zvishavane',
                    'province' => 'Midlands'
                ],
            ]
        );
    }
}
