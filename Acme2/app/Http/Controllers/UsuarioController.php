<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsuarioController extends Controller
{
    public function getUsuarios(){
        /** Select * from users */
        $data = User::all();
        //dd($data);
        return view ("admin.users")-> with('usuarios',$data);
    }
}
