<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Zonas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('zonas')->insert([
            'nombre'=>'Zona Norte',
            'descripcion'=>'La zona ideal para pasar un rato agradable en familia y/o amigos',
            'created_at'=>date('Y-m-d h:m:s')

        ]);

        DB::table('zonas')->insert([
            'nombre'=>'Zona Sur',
            'descripcion'=>'La zona ideal para tener un lugar apartado de la sociedad',
            'created_at'=>date('Y-m-d h:m:s')

        ]);
    }
}
