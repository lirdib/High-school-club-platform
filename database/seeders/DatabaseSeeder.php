<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        // \App\Models\User::factory(10)->create();

        //Ketu thirren Seeders per mbushjen e databazave me vlera te ndryshme
        //Per te bere seed (mbushur db me te dhena), duhet te shtypim komanden:
        //php artisan db:seed

        //Cdo her qe thirrjet komanda e siperme do te shtohen te njejtat te dhena disa here.
        //Qe te pastrojme tabelat dhe te shtojme vec njehere te dhenat ne seeders shkruajme komanden:
        //php artisan migrate:fresh --seed

        //Ne NxenesitTableSeeder.php kemi hapat per te shtuar rrjeshta te tjere ne db

        $this->call([
            KlubetTableSeeder::class,
        ]);
        $this->call([
            NxenesitTableSeeder::class,
        ]);
        $this->call([
            MesuesitTableSeeder::class,
        ]);
    }
}
