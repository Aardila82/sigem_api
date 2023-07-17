<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Texto_minuta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\GuardarTexto_minutaRequest;
use App\Http\Requests\ActualizarTexto_minutaRequest;
use App\Http\Requests\Texto_minuta\UploadFileTexto_minutaRequest;

class Texto_minutaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Texto_minuta::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarTexto_minutaRequest $request)
    {

        $dateNow = Carbon::now();
        $data = $request->all();
        
        $data["date_created"] =  $dateNow->toDateString();
        $data["created_by"] =  auth('sanctum')->user()->username;
        $data["date_modified"] =  $dateNow->toDateString();
        $data["modified_by"] =  auth('sanctum')->user()->username;

        Texto_minuta::create($data);
        return response()->json([
            'res' => true,
            'msg' => 'Texto Minuta Guardado Correctamente'
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Texto_minuta $texto_minuta)
    {
        
        return response()->json([
            'res' => true,
            'texto_minuta' => $texto_minuta
        ],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarTexto_minutaRequest $request, Texto_minuta $texto_minuta)
    {
        $dateNow = Carbon::now();
        $data = $request->all();
        
        $data["date_modified"] =  $dateNow->toDateString();
        $data["modified_by"] =  auth('sanctum')->user()->username;


        $texto_minuta->update($data);
        return response()->json([
            'res' => true,
            'msg' => 'Apoderado Actualizado Correctamente' 
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


    public function uploadFile(UploadFileTexto_minutaRequest $request, Texto_minuta $texto_minuta )
    {
    
        $cod_minuta = $request->route('cod_minuta');
        $image_path = $request->file('plantilla')->store('templates');
        Storage::move($image_path, 'templates/plantilla'.$cod_minuta.'.rtf');

        
        /*$data = Uploadfile::create([
            'image' => $image_path,
        ]);*/

        return response(Response::HTTP_CREATED);
        
    }
}
