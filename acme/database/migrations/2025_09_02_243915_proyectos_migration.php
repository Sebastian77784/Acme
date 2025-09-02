<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('proyectos',function(Blueprint $table){
            $table-> id();
            $table->string('Nombre_proyecto');
            $table->string('Descripcion');
            $table->date('fecha_entrega');
            $table->foreignid('id_users')->constrained('users');
            $table->double('precios');
            $table->double('anticipo');
            $table->string('metodo_pago');
            $table->foreignid('id_pagos')->constrained('pagos');
            $table->foreignid('id_condominios')->constrained('condominios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExits('proyectos');
    }
};
