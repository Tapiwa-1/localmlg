<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class HeadmanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // name: '',
        // district:'',
        // chieftainship:'',
        // mutupo:'',
        // incumbent:'',
        // idnumber:'',
        // ecnumber:'',
        // gender:'',
        // dateofbirth:'',
        // dateofappointment:'',
        // status:'',
        // contactnumber:'',
        // numberofheadman:'',
        // numberofwards:'',
        // numberofvillages:'',
        // dateofdeathorremoval:'',
        // physicalladdress:'',


        DB::table('users')->insert([
            'name' => Str::random(10),

        ]);
    }
}
