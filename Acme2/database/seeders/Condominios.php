<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Condominios extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('condominios')-> insert([
            'Nombre_condominio'=>'Gran Casa',
            'direccion'=>'calle sur No.255',
            'id_zona'=>1,
            'created_at'=>date('Y-m-d h:m:s')

        ]);

        DB::table('condominios')-> insert([
            'Nombre_condominio'=>'Mansion',
            'direccion'=>'calle norte No.554',
            'id_zona'=>2,
            'created_at'=>date('Y-m-d h:m:s')

        ]);
    }
}
