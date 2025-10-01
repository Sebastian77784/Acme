<?php
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\planosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'dashboard'],function(){
    Route::get('/', function () {
        return view('admin.dashboard');
    });
    Route::get("/users",[UsuarioController::class, 'getUsuarios']);
    Route::get("/planos",[planosController::class, 'getplano']);
    Route::POST("/planos",[planosController::class, 'createPlanos']);
});

