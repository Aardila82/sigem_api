<?php

namespace App\Http\Controllers;

use App\Models\Apoderado;
use Illuminate\Http\Request;
use App\Http\Requests\GuardarApoderadoRequest;
use App\Http\Requests\ActualizarApoderadoRequest;

class ApoderadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Apoderado::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarApoderadoRequest $request)
    {
        Apoderado::create($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'Apoderado Guardado Correctamente'
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Apoderado $apoderado)
    {
        return response()->json([
            'res' => true,
            'apoderado' => $apoderado 
        ],200); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarApoderadoRequest $request, Apoderado $apoderado)
    {
        $apoderado->update($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'Apoderado Actualizado Correctamente.' 
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apoderado $apoderado)
    {
        $apoderado->delete();
        return response()->json([
            'res' => true,
            'msg' => 'Apoderado Eliminado Correctamente' 
        ],200); 
    }
}
