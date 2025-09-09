<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call(Zonas::class);
       $this->call(Condominios::class);
       $this->call(Users::class);
       $this->call(Pago::class);
       $this->call(Proyectos::class);
       $this->call(Planos::class);
       
    }
}
