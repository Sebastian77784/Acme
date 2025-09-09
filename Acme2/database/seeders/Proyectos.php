<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Proyectos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('proyectos')->insert([
            'Nombre_proyecto'=>'Mansion',
            'Descripcion'=>'Casa grande',
            'fecha_entrega'=>date('Y-m-d'),
            'id_users'=>1,
            'precios'=>1000000,
            'anticipo'=>500000,
            'metodo_pago'=>'Transferencia',
            'id_pagos'=>1,
            'id_condominios'=>1,
            'created_at'=>date('Y-m-d h:m:s')

        ]);

        DB::table('proyectos')->insert([
            'Nombre_proyecto'=>'Edificio',
            'Descripcion'=>'Walmart',
            'fecha_entrega'=>date('Y-m-d'),
            'id_users'=>2,
            'precios'=>2000000,
            'anticipo'=>1000000,
            'metodo_pago'=>'Efectivo',
            'id_pagos'=>2,
            'id_condominios'=>2,
            'created_at'=>date('Y-m-d h:m:s')

        ]);
    }
}
