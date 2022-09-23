<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class NxenesitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Brenda $data, shtojme [ ] dhe brenda kllapave shenojme te dhenat e rrjeshtit te ri sipas struktures qe kemi me poshte.

        $data = [
            [
                'emri' => 'Mathias',
                'mbiemri' => 'Dariu',
                'dega' => 'Elektronike',
                'viti' => 4,
                'klasa' => '4-5'
            ],
            [
                'emri' => 'Lirdi',
                'mbiemri' => 'Budo',
                'dega' => 'Elektronike',
                'viti' => 4,
                'klasa' => '4-5'
            ],
            [
                'emri' => 'Martin',
                'mbiemri' => 'Dedja',
                'dega' => 'Elektronike',
                'viti' => 4,
                'klasa' => '4-6'
            ],
            [
                'emri' => 'Filan1',
                'mbiemri' => 'Fisteku1',
                'dega' => 'Elektronike',
                'viti' => 3,
                'klasa' => '3-5'
            ],
            [
                'emri' => 'Filan2',
                'mbiemri' => 'Fisteku2',
                'dega' => 'Elektronike',
                'viti' => 3,
                'klasa' => '3-5'
            ],

        ];

        DB::table('nxenesit_tabel')->insert($data);
    }
}
