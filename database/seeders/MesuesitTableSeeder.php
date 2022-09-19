<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MesuesitTableSeeder extends Seeder
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
                'emri' => 'Dervis',
                'mbiemri' => 'Merdinaj',
                'lenda' => 'Praktike profesionale',
                'dega' => 'Elektronike',
                'admin' => 'lorem ipsum',
                'klasa_kujdesari' => '4-3',
                'klubi_ne_kujdesari' => 1,
                'supervizor' => 'lorem ipsum'
            ],
            [
                'emri' => 'Ilda',
                'mbiemri' => 'Fishti',
                'lenda' => 'Rrjete Kompjuterike',
                'dega' => 'Elektronike',
                'admin' => 'lorem ipsum',
                'klasa_kujdesari' => '4-7',
                'klubi_ne_kujdesari' => 1,
                'supervizor' => 'lorem ipsum'
            ],
            [
                'emri' => 'Alketa',
                'mbiemri' => 'Mucalla',
                'lenda' => 'Baze te dhenash',
                'dega' => 'Elektronike',
                'admin' => 'lorem ipsum',
                'klasa_kujdesari' => '4-2',
                'klubi_ne_kujdesari' => 1,
                'supervizor' => 'lorem ipsum'
            ],
            [
                'emri' => 'Filan1',
                'mbiemri' => 'Fisteku1',
                'lenda' => 'lorem ipsum',
                'dega' => 'Elektronike',
                'admin' => 'lorem ipsum',
                'klasa_kujdesari' => '4-3',
                'klubi_ne_kujdesari' => 1,
                'supervizor' => 'lorem ipsum'
            ],
            [
                'emri' => 'Ledio',
                'mbiemri' => 'Ismaili',
                'lenda' => 'Praktike profesionale',
                'dega' => 'Elektronike',
                'admin' => 'lorem ipsum',
                'klasa_kujdesari' => '4-5',
                'klubi_ne_kujdesari' => 1,
                'supervizor' => 'lorem ipsum'
            ],

        ];

        DB::table('mesuesit')->insert($data);
    }
}
