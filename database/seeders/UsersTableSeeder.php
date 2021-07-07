<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            //    admin
            [
                'full_name' => 'onyebuchi Admin',
                'username' => 'Admin',
                'email' =>  'Admin@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'admin',
                'status' => 'active'
            ],

            //     vendor

            [
                'full_name' => 'onyebuchi seller',
                'username' => 'seller',
                'email' =>  'seller@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'seller',
                'status' => 'active'
            ],
            // custusmer

            [
                'full_name' => 'onyebuchi custummer',
                'username' => 'Cuctomer',
                'email' =>  'Cuctomer@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'Customer',
                'status' => 'active'
            ],



        ]);
    }
}
