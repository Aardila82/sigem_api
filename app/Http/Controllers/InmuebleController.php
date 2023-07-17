<?php

namespace App\Http\Controllers;

use App\Models\Inmueble;
use Illuminate\Http\Request;

class InmuebleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inmueble::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Inmueble::create($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'Inmueble Guardado Correctamente'
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Inmueble $inmueble)
    {
        return response()->json([
            'res' => true,
            'apoderado' => $inmueble 
        ],200); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inmueble $inmueble)
    {
        $inmueble->update($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'Inmueble Actualizado Correctamente' 
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inmueble $inmueble)
    {
        $inmueble->delete();
        return response()->json([
            'res' => true,
            'msg' => 'Inmueble Eliminado Correctamente' 
        ],200); 
    }
}
