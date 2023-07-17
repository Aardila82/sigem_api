<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DocsController;
use App\Http\Controllers\TablaController;
use App\Http\Controllers\CiudadeController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\NotariaController;
use App\Http\Controllers\NotarioController;
use App\Http\Controllers\SuscritoController;
use App\Http\Controllers\ApoderadoController;
use App\Http\Controllers\Datos_MinutaController;
use App\Http\Controllers\Radicacion_MinutaController;
use App\Http\Controllers\Tabla_DatoController;
use App\Http\Controllers\Var_minutaController;
use App\Http\Controllers\Var_ModuloController;
use App\Http\Controllers\Texto_minutaController;
use App\Http\Controllers\Tipos_SuscritoController;
use App\Http\Controllers\Tipos_VariableController;
use App\Http\Controllers\Variables_FormatoController;
use App\Http\Controllers\GenerateArtisanController;
use App\Http\Controllers\Tipos_inmuebleController;
use App\Http\Controllers\InmuebleController;
use App\Http\Controllers\Motivos_afectController;
use App\Http\Controllers\tipos_adquisicionController;
use App\Models\Tipo_inmueble;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("login", [AuthController::class,"login"]);
Route::get("docs",  [DocsController::class,"docs"]);
Route::put("cambio_contrasena/{user}", [AuthController::class,"cambio_contrasena"]);
Route::get('texto_minutas',[Texto_minutaController::class, 'index']);

Route::middleware('auth:sanctum')->group(function( ){
    //Autenticacion
    Route::post("registro", [AuthController::class,"registro"]);
    Route::post("perfil", [AuthController::class,"perfil"]);
    Route::post("logout", [AuthController::class,"logout"]);
    Route::put("registroActualizado/{user}", [AuthController::class,"update"]);
    //Apoderados
    Route::get('apoderados',[ApoderadoController::class, 'index']);
    Route::post('apoderados',[ApoderadoController::class, 'store']);
    Route::get('apoderados/{apoderado}',[ApoderadoController::class, 'show']);
    Route::put('apoderados/{apoderado}',[ApoderadoController::class, 'update']);
    Route::delete('apoderados/{apoderado}',[ApoderadoController::class, 'destroy']);
    //texto_minuta
    
    Route::post('texto_minutas',[Texto_minutaController::class, 'store']);
    Route::get('texto_minutas/{texto_minuta}',[Texto_minutaController::class, 'show']);
    Route::put('texto_minutas/{texto_minuta}',[Texto_minutaController::class, 'update']);
    Route::post('texto_minutas/uploadFile/{cod_minuta}',[Texto_minutaController::class, 'uploadFile']);
    

    Route::get('var_minutas/list/{var_minuta}',[Var_minutaController::class, 'index']);
    Route::post('var_minutas',[Var_minutaController::class, 'store']);
    Route::get('var_minutas/{var_minuta}',[Var_minutaController::class, 'show']);
    //radicacion_minuta
    Route::get('radicacion_minutas',[Radicacion_MinutaController::class, 'index']);
    Route::put('radicacion_minutas/{radicacion_minuta}',[Radicacion_MinutaController::class, 'update']);
    Route::post('radicacion_minutas',[Radicacion_MinutaController::class, 'store']);
    Route::get('radicacion_minutas/{radicacion_minuta}',[Radicacion_MinutaController::class, 'show']);
    //tipos_suscritos
    Route::get('tipos_suscritos',[Tipos_SuscritoController::class, 'index']);
    Route::get('tipos_suscritos/{tipos_suscrito}',[Tipos_SuscritoController::class, 'show']);
    //variables_formatos
    Route::get('variables_formatos',[Variables_FormatoController::class, 'index']);
    Route::get('variables_formatos/{variables_formato}',[Variables_FormatoController::class, 'show']);
    //Tablas
    Route::get('tablas',[TablaController::class, 'index']);
    Route::get('tablas/{tabla}',[TablaController::class, 'show']);
    //var_modulos
    Route::get('var_modulos',[Var_ModuloController::class, 'index']);
    Route::get('var_modulos/{var_modulo}',[Var_ModuloController::class, 'show']);
    //tipos_variables
    Route::get('tipos_variables',[Tipos_VariableController::class, 'index']);
    Route::get('tipos_variables/{tipos_variable}',[Tipos_VariableController::class, 'show']);

    //Datos_minutas
    Route::get('datos_minutas',[Datos_MinutaController::class, 'index']);
   // Route::get('datos_minutas/{rad_minuta}',[Datos_MinutaController::class, 'index']);
    Route::post('datos_minutas',[Datos_MinutaController::class, 'store']);
    Route::get('datos_minutas/{Datos_minuta}',[Datos_MinutaController::class, 'show']);
    //{Datos_minuta}',[Datos_MinutaController::class, 'generateContrato']);
    //Route::post('datos_minutas/generateContrato/{cod_minuta}',[Datos_MinutaController::class, 'generateContrato']);
     //suscrito
     Route::get('suscritos',[SuscritoController::class, 'index']);
     Route::post('suscritos',[SuscritoController::class, 'store']);
     Route::get('suscritos/{suscrito}',[SuscritoController::class, 'show']);
     Route::put('suscritos/{suscrito}',[SuscritoController::class, 'update']);
     Route::delete('suscritos/{suscrito}',[SuscritoController::class, 'destroy']);
    //general
    Route::get('general',[GeneralController::class, 'index']);
    Route::post('general',[GeneralController::class, 'store']);
    Route::get('general/{general}',[GeneralController::class, 'show']);
    Route::put('general/{general}',[GeneralController::class, 'update']);
    Route::delete('general/{general}',[GeneralController::class, 'destroy']);
    //Notaria
    Route::get('notarias',[NotariaController::class, 'index']);
    Route::get('notarias/{notaria}',[NotariaController::class, 'show']);

    //Notario
    Route::get('notarios',[NotarioController::class, 'index']);
    Route::get('notarios/{notario}',[NotarioController::class, 'show']);

    //Ciudades
    Route::get('ciudades',[CiudadeController::class, 'index']);
    Route::get('ciudades/{ciudade}',[CiudadeController::class, 'show']);

    //Inmuebles
    Route::get('inmuebles',[InmuebleController::class, 'index']);
    Route::post('inmuebles',[InmuebleController::class, 'store']);
    Route::get('inmuebles/{inmueble}',[InmuebleController::class, 'show']);
    Route::put('inmuebles/{inmueble}',[InmuebleController::class, 'update']);
    Route::delete('inmuebles/{inmueble}',[InmuebleController::class, 'destroy']);

    //tipo_inmueble
    Route::get('tipos_inmuebles',[Tipos_inmuebleController::class, 'index']);
    Route::get('tipos_inmuebles/{tipos_inmueble}',[Tipos_inmuebleController::class, 'show']);

    //tipos_adquisicion
    Route::get('tipos_adquisicion',[tipos_adquisicionController::class, 'index']);

    //motivos_afect
    Route::get('motivos_afect',[Motivos_afectController::class, 'index']);


});

//Datos_minutas
//Route::get('datos_minutas/{rad_minuta}',[Datos_MinutaController::class, 'index']);
//Route::get('datos_minutas/{Datos_minuta}',[Datos_MinutaController::class, 'show']);
Route::get('generate_contrato/{rad_minuta}',[Datos_MinutaController::class, 'generateContrato']);


/** Generador de archivos **/
Route::get('generate_artisan/{tabla}',[GenerateArtisanController::class, 'GenerateRules']);
