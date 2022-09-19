<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KlubetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
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

        DB::table('klubet')->insert($data);
    }
}
