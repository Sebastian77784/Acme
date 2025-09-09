<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Pago extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pagos')->insert([
            'RFC'=>'S1e2b3',
            'forma_pago'=>'Transferencia',
            'factura'=>'si',
            'id_users'=>1,
            'created_at'=>date('Y-m-d h:m:s')
        ]);

         DB::table('pagos')->insert([
            'RFC'=>'S1e2b4',
            'forma_pago'=>'Efectivo',
            'factura'=>'no',
            'id_users'=>2,
            'created_at'=>date('Y-m-d h:m:s')
        ]);
    }
}
