<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResidentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('residents')->insert([
            [
                'firstname' => 'Svet',
                'lastname' => 'Seneres',
                'age' => 20,
                'gender' => 'Female',
                'birthday' => 04/13/02,
                'birthplace' => 'Olongapo',
                'address' => 'Woodhouse, Gordon Heights, Olongapo City',
                'contact'=> 87654321,
                'email' => 'svetleighann@gmail.com',
                'occupation' => 'IT',
                'religion' => 'Roman Catholic'
            ],
            [
                'firstname' => 'Julianne',
                'lastname' => 'Suanes',
                'age' => 21,
                'gender' => 'Female',
                'birthday' => 07/27/01,
                'birthplace' => 'Olongapo',
                'address' => 'Cabling lane, Sta Rita, Olongapo City',
                'contact'=> 867634301,
                'email' => 'suanesjulianne@gmail.com',
                'occupation' => 'Engineer',
                'religion' => 'Mormon'
            ],
            [
                'firstname' => 'Racan',
                'lastname' => 'Lawrence',
                'age' => 21,
                'gender' => 'Male',
                'birthday' => 01/13/02,
                'birthplace' => 'Olongapo',
                'address' => 'New Ilalim, Olongapo City',
                'contact'=> 93672458,
                'email' => 'racanlawrence@gmail.com',
                'occupation' => 'Nurse',
                'religion' => 'Protestant'
            ]
            ]); 
    }
}
