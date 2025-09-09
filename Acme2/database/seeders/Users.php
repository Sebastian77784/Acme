<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'rol'=>'arquitecto',
            'Nombre'=>'Juve',
            'Ap_paterno'=>'Flores',
            'Ap_materno'=>'Ramirez',
            'telefono'=>636,
            'email'=>'juve@gmail.com',
            'password'=>Hash::make('123'),
            'created_at'=>date('Y-m-d h:m:s')
        ]);

        DB::table('users')->insert([
            'rol'=>'Cliente',
            'Nombre'=>'Raul',
            'Ap_paterno'=>'Madrid',
            'Ap_materno'=>'Flores',
            'telefono'=>636,
            'email'=>'Raul@gmail.com',
            'password'=>Hash::make('1225'),
            'created_at'=>date('Y-m-d h:m:s')
        ]);
    }
}
