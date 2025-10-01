<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plano;

class PlanosController extends Controller
{       
    public function getplano(){
        /** Select * from planos */
        $data = Plano::all();
        //dd($data);
        return view ("admin.planos")-> with('planos',$data);
    }
    public function createPlanos(Request $request){
        //dd($request->email);
        //reglas de validacion
        $request->validate([
            'Archivo_plano' => 'required|string|max:255', // texto
            'Actualizacion_Anterior' => 'required|date',  // fecha
            'id_proyecto' => 'required|integer',
            'Hoja' => 'required|integer',
            'Version' => 'required|integer',
        ]);     



        //Guardar Registro
        $plano = new Plano();
        $plano->Archivo_plano=$request->Archivo_plano;
        $plano->Actualizacion_Anterior=$request->Actualizacion_Anterior;
        $plano->id_proyecto=$request->id_proyecto;
        $plano->Hoja=$request->Hoja;
        $plano->Version = $request->Version;
        $plano->save();
        //dd("plano Insertado");
        return redirect()
            ->back()
            ->with('success',"plano insertado correctamente");
    }
}




