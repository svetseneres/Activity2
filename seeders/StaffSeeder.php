<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staffs')->insert([
            [
                'firstname' => 'Gavino',
                'lastname' => 'Lacorte',
                'position' => 'President',
                'gender' => 'Male',
                'contact'=> 987678987,
                'email' => 'gavinolacorte@gmail.com',
                'address' => 'Gordon Heights, Olongapo City',
            ],
            [
                'firstname' => 'Ashley',
                'lastname' => 'Park',
                'position' => 'Secretary',
                'sex' => 'Female',
                'contact'=> 987656564,
                'email' => 'ashleypark@gmail.com',
                'address' => 'Gordon Heights, Olongapo City',
            ],            
            [
                'firstname' => 'Trixie',
                'lastname' => 'Baleros',
                'position' => 'Mayor',
                'sex' => 'Female',
                'contact'=> 934872186,
                'email' => 'trixiebaleros@gmail.com',
                'address' => 'Mabayuan, Olongapo City',
            ],
            ]);   
    }
}
