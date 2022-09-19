<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  
        DB::table('users')->insert([
            'id' => '6',
            'role_id'=>'1',
            'name' => 'Admin2',
            'email' => 'admin2@gmail.com',
            'password' =>'abxfh5738k'
        ]);
        
        
    }
}
