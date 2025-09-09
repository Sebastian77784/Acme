<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Planos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('planos')->insert([
            'Archivo_plano'=>'Mansion 1',
            'Actualizacion_Anterior'=>date('Y-m-d'),
            'id_proyecto'=>1,
            'Hoja'=>5,
            'Version'=>'1.50',
            'created_at'=>date('Y-m-d h:m:s')

        ]);

        DB::table('planos')->insert([
            'Archivo_plano'=>'Walmart',
            'Actualizacion_Anterior'=>date('Y-m-d'),
            'id_proyecto'=>2,
            'Hoja'=>4,
            'Version'=>'1.75',
            'created_at'=>date('Y-m-d h:m:s')

        ]);
    }
}
