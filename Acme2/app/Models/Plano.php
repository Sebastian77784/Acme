<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class plano extends Authenticatable
{
        protected$table ='planos';
    protected $fillable = [
        'Archivo_plano',
        'Actualizacion_Anterior',
        'id_proyecto',
        'Hoja',
        'Version',
    ];
}
