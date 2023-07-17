<?php

namespace App\Http\Controllers;

use App\Http\Requests\Guardardatos_minutaRequest;
use App\Models\Datos_minuta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Datos_MinutaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(String $rad_minuta)
    {
        $Datos_minuta = Datos_minuta::all()->where('rad_minuta', $rad_minuta);
        return response()->json([
            'res' => true,
            'datos_minuta' => $Datos_minuta 
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarDatos_MinutaRequest $request)
    {
        Datos_minuta::create($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'Datos minuta Guardado Correctamente'
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

       /* $Datos_minuta = Datos_minuta::all()->where('rad_minuta', $rad_minuta);

        return response()->json([
            'res' => true,
            'datos_minuta' => $Datos_minuta 
        ],200);*/


        $data = DB::table('datos_minutas as dm')
        ->select(
            'dm.rad_minuta',
            'dm.cod_minuta',
            'secuencia_var',
            'contenido_var'

        )->where('dm.rad_minuta', '=', $rad_minuta)
        ->get();

        return response()->json([
            'res' => true,
            'datos_minuta' => $data 
        ],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    public function generateContrato(String $rad_minuta)
    {
        $res = false;
        $mensaje = "";
        $data = Datos_minuta::where('rad_minuta', $rad_minuta)->get();

        if(!$data->isEmpty()){
            $cod_minuta = $data[0]->cod_minuta;
            $template = 'plantilla'.$cod_minuta.'.rtf';
            $template_full = env("TEMPLATE_PATH")."/".$template;

            $template_tmp_full = env("TMP_PATH")."/radicado_".$template;
            Storage::copy($template_full, $template_tmp_full);
            $content_storage = Storage::disk('local')->get($template_full);

            foreach($data as $dataKey => $dataVal){
        
                $content_storage = str_replace('$var'.$dataVal->secuencia_var, $dataVal->contenido_var, $content_storage);
                //dd($content_storage);
            }
            //dd($content_storage);
            Storage::put($template_tmp_full, $content_storage);    
            return Storage::download($template_tmp_full);
        }
        else{
            $mensaje = "No existen variables guardadas para su registro.";
        }



        return response()->json([
            'res' => $res,
            'mensaje' => $mensaje 
        ],200);
        
    }
}
