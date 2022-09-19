<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjektTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ProjektTableSeeder nuk eshte i perfunduar

        $data = [
            [
                'emri' => 'Klubi i Robotikes',
                'description' => 'Klubi qe merret me ndertimin e robotave'
            ],
            [
                'emri' => 'Klubi Open Source',
                'description' => 'Klubi Open Source'
            ],
            [
                'emri' => 'Klubi i Programimit',
                'description' => 'Klubi qe merret me programim'
            ],
            [
                'emri' => 'Klubi i lorem ipsum',
                'description' => 'lorem ipsum'
            ]
        ];
    }
}
