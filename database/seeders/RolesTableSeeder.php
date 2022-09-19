<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role_name' => 'Admin',
            'description' => 'administratori',
        ]);
        
        DB::table('roles')->insert([
            'role_name' => 'Mesues',
            'description' => 'mesues i lendes',
        ]);
        
        DB::table('roles')->insert([
            'role_name' => 'Guest',
            'description' => 'perdorues i thjeshte',
        ]);
    }
}
