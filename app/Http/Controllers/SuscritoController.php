<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Suscrito;
use Illuminate\Http\Request;
use App\Http\Requests\GuardarSuscritoRequest;
use App\Http\Requests\ActualizarSuscritoRequest;

class SuscritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return Suscrito::orderBy("suscr_nombre", "asc")->get();
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarSuscritoRequest $request)
    {

        $dateNow = Carbon::now();
        $data = $request->all();
        
        $data["date_created"] =  $dateNow->toDateString();
        $data["created_by"] =  auth('sanctum')->user()->username;
        $data["date_modified"] =  $dateNow->toDateString();
        $data["modified_by"] =  auth('sanctum')->user()->username;

        Suscrito::create($data);
        return response()->json([
            'res' => true,
            'msg' => 'Suscrito Guardado Correctamente'
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Suscrito $suscrito)
    {
        return response()->json([
            'res' => true,
            'suscrito' => $suscrito 
        ],200); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarSuscritoRequest $request, Suscrito $suscrito)
    {
        
        $dateNow = Carbon::now();
        $data = $request->all();
        
        $data["date_modified"] =  $dateNow->toDateString();
        $data["modified_by"] =  auth('sanctum')->user()->username;

        $suscrito->update($data);
        return response()->json([
            'res' => true,
            'msg' => 'Suscrito Actualizado Correctamente' 
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suscrito $suscrito)
    {
        $suscrito->delete();
        return response()->json([
            'res' => true,
            'msg' => 'Apoderado Eliminado Correctamente' 
        ],200); 
    }
}
