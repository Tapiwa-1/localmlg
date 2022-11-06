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
                    'provincal_id' => 1
                ],
                [
                    'name' => 'Bulawayo',
                    'provincal_id' => 2
                ],
                [
                    'name' => 'Buhera',
                    'provincal_id' => 3
                ],
                [
                    'name' => 'Chimanimani',
                    'provincal_id' => 3
                ],
                [
                    'name' => 'Chipinge',
                    'provincal_id' => 3
                ],
                [
                    'name' => 'Makoni',
                    'provincal_id' => 3
                ],
                [
                    'name' => 'Mutare',
                    'provincal_id' => 3
                ],
                [
                    'name' => 'Mutasa',
                    'provincal_id' => 3
                ],
                [
                    'name' => 'Nyanga',
                    'provincal_id' => 3
                ],
                [
                    'name' => 'Bindura',
                    'provincal_id' => 4
                ],
                [
                    'name' => 'Guruve',
                    'provincal_id' => 4
                ],
                [
                    'name' => 'Mazowe',
                    'provincal_id' => 4
                ],
                [
                    'name' => 'Mbire',
                    'provincal_id' => 4
                ],
                [
                    'name' => 'Mount Darwin',
                    'provincal_id' => 4
                ],
                [
                    'name' => 'Muzarabani',
                    'provincal_id' => 4
                ],
                [
                    'name' => 'Mukumbura',
                    'provincal_id' => 4
                ],
                [
                    'name' => 'Rushinga',
                    'provincal_id' => 4
                ],
                [
                    'name' => 'Shamva',
                    'provincal_id' => 4
                ],
                [
                    'name' => 'Chikomba',
                    'provincal_id' => 5
                ],
                [
                    'name' => 'Goromonzi',
                    'provincal_id' => 5
                ],
                [
                    'name' => 'Marondera',
                    'provincal_id' => 5
                ],
                [
                    'name' => 'Mudzi',
                    'provincal_id' => 5
                ],
                [
                    'name' => 'Murehwa',
                    'provincal_id' => 5
                ],
                [
                    'name' => 'Mutoko',
                    'provincal_id' => 5
                ],
                [
                    'name' => 'Seke',
                    'provincal_id' => 5
                ],
                [
                    'name' => 'UMP (Uzumba-Maramba-Pfungwe)',
                    'provincal_id' => 5
                ],
                [
                    'name' => 'Wedza (Hwedza)',
                    'provincal_id' => 5
                ],
                [
                    'name' => 'Chegutu',
                    'provincal_id' => 6
                ],
                [
                    'name' => 'Hurungwe',
                    'provincal_id' => 6
                ],
                [
                    'name' => 'Kariba',
                    'provincal_id' => 6
                ],
                [
                    'name' => 'Makonde',
                    'provincal_id' => 6
                ],
                [
                    'name' => 'Mhondoro-Ngezi',
                    'provincal_id' => 6
                ],
                [
                    'name' => 'Sanyati',
                    'provincal_id' => 6
                ],
                [
                    'name' => 'Zvimba',
                    'provincal_id' => 6
                ],
                [
                    'name' => 'Kadoma',
                    'provincal_id' => 6
                ],
                [
                    'name' => 'Chinhoyi',
                    'provincal_id' => 6
                ],
                [
                    'name' => 'Bikita',
                    'provincal_id' => 7
                ],
                [
                    'name' => 'Chiredzi',
                    'provincal_id' => 7
                ],
                [
                    'name' => 'Chivi',
                    'provincal_id' => 7
                ],
                [
                    'name' => 'Gutu',
                    'provincal_id' => 7
                ],
                [
                    'name' => 'Masvingo',
                    'provincal_id' => 7
                ],
                [
                    'name' => 'Mwenezi',
                    'provincal_id' => 7
                ],
                [
                    'name' => 'Zaka',
                    'provincal_id' => 7
                ],
                [
                    'name' => 'Binga',
                    'provincal_id' => 8
                ],
                [
                    'name' => 'Bubi',
                    'provincal_id' => 8
                ],
                [
                    'name' => 'Hwange',
                    'provincal_id' => 8
                ],
                [
                    'name' => 'Lupane',
                    'provincal_id' => 8
                ],
                [
                    'name' => 'Nkayi',
                    'provincal_id' => 8
                ],
                [
                    'name' => 'Tsholotsho',
                    'provincal_id' => 8
                ],
                [
                    'name' => 'Umguza',
                    'provincal_id' => 8
                ],
                [
                    'name' => 'Beitbridge',
                    'provincal_id' => 9
                ],
                [
                    'name' => 'Bulilima',
                    'provincal_id' => 9
                ],
                [
                    'name' => 'Gwanda',
                    'provincal_id' => 9
                ],
                [
                    'name' => 'Insiza',
                    'provincal_id' => 9
                ],
                [
                    'name' => 'Mangwe',
                    'provincal_id' => 9
                ],
                [
                    'name' => 'Matobo',
                    'provincal_id' => 9
                ],
                [
                    'name' => 'Umzingwane',
                    'provincal_id' => 9
                ],
                [
                    'name' => 'Chirumhanzu',
                    'provincal_id' => 10
                ],
                [
                    'name' => 'Gokwe North',
                    'provincal_id' => 10
                ],
                [
                    'name' => 'Gokwe South',
                    'provincal_id' => 10
                ],
                [
                    'name' => 'Gweru',
                    'provincal_id' => 10
                ],
                [
                    'name' => 'Kwekwe',
                    'provincal_id' => 10
                ],
                [
                    'name' => 'Mberengwa',
                    'provincal_id' => 10
                ],
                [
                    'name' => 'Shurugwi',
                    'provincal_id' => 10
                ],
                [
                    'name' => 'Zvishavane',
                    'provincal_id' => 10
                ],
            ]
        );
    }
}
