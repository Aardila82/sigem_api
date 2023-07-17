<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActualizarRadicacion_MinutaRequest;
use App\Http\Requests\GuardarRadicacion_MinutaRequest;
use App\Models\Radicacion_minuta;
use Illuminate\Http\Request;
use Carbon\Carbon;
class Radicacion_MinutaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        
        return Radicacion_minuta::orderBy("date_created", "asc")->get();
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarRadicacion_MinutaRequest $request)
    {
        $dateNow = Carbon::now();
        $data = $request->all();
        

        $data["creator_name"] = auth('sanctum')->user()->username;
        $data["creator_email"] = auth('sanctum')->user()->username;
        $data["creator_phone"] = auth('sanctum')->user()->username;
        $data["date_created"] =  $dateNow->toDateString();
        $data["created_by"] =  auth('sanctum')->user()->username;
        $data["date_modified"] =  $dateNow->toDateString();
        $data["modified_by"] =  auth('sanctum')->user()->username;

        Radicacion_minuta::create($data);
        return response()->json([
            'res' => true,
            'msg' => 'Radicacion Minuta Guardado Correctamente'
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(String $rad_minuta)
    {
       /*echo" <pre>";
        var_dump($rad_minuta);
        echo" </pre>";*/
        //$cod_minuta = $var_minutas["cod_minuta"];
        $radicacion_minuta = Radicacion_minuta::all()->where('rad_minuta', $rad_minuta)->first();
        return response()->json([
            'res' => true,
            'radicacion_minuta' => $radicacion_minuta
        ],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarRadicacion_MinutaRequest $request, Radicacion_minuta $radicacion_minuta)


    {
        $dateNow = Carbon::now();
        $data = $request->all();
        
        $data["date_modified"] =  $dateNow->toDateString();
        $data["modified_by"] =  auth('sanctum')->user()->username;


        $radicacion_minuta->update($data);
        return response()->json([
            'res' => true,
            'msg' => 'Texto Minuta Actualizado Correctamente' 
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



}
