<?php

namespace App\Http\Controllers;

use App\Models\General;
use Illuminate\Http\Request;
use App\Http\Requests\General\GuardarGeneralRequest;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return General::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarGeneralRequest $request)
    {
        General::create($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'General Guardado Correctamente'
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(General $general)
    {
        return response()->json([
            'res' => true,
            'general' => $general 
        ],200); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, General $general)
    {
        $general->update($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'General Actualizado Correctamente' 
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(General $general)
    {
        $general->delete();
        return response()->json([
            'res' => true,
            'msg' => 'General Eliminado Correctamente' 
        ],200); 
    }
}
