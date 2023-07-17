<?php

namespace App\Http\Controllers;

use App\Http\Requests\Var_minuta\GuardarVar_minutaRequest;
use App\Models\Texto_minuta;
use App\Models\Tipos_variable;
use App\Models\Var_minuta;
use App\Models\Variables_formato;
use Illuminate\Http\Request;

class Var_minutaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(String $cod_minuta)
    {
        return Var_minuta::all()->where('cod_minuta', $cod_minuta);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //public function store(Request $request )
    public function store(GuardarVar_minutaRequest $request)
    {
        $res = array(
            'res' => false,
            'error' => false,
            'msg' => 'Variables guardadas correctamente.'
        );
        $message_code = 200;
        $message_array = array();
        $message_error_array = array();
        
        $var_minutas = $request->all();
        $cod_minuta = $var_minutas["cod_minuta"];
        $texto_minuta = Texto_minuta::all()->where('cod_minuta', $cod_minuta)->first();
        
        if(empty($texto_minuta)){
            $res['error'] = true;
            $res['msg'] = 'La minuta '.$cod_minuta.' no existe.';
            $message_code = 200;         
        }else{
            $nro_variables = $texto_minuta->nro_variables;
            $nro_variables_json = count($var_minutas['variables']);
            if($nro_variables_json != $nro_variables){
                $res['error'] = true;
                $res['msg'] = 'El numero de variables asignada a la minuta ('.$nro_variables.'), '. 
                        'no coincide con el numero  de variabes enviadas en el json ('.$nro_variables_json.'). ';
                $message_code = 200;
            }else{
    
                foreach($var_minutas['variables'] as $key => $variables_int){
                    $variables_int["cod_minuta"] = $cod_minuta;
                    $var_minuta_db = null;

                    //s itipo Variable no existe en tabla Error
                    $tipos_variable = Tipos_variable::all()->where('tipo_variable', $variables_int["tip_var"])->first();
                    if(!empty($tipos_variable)){
                        $variables_formato = Variables_formato::all()->where('tipo_variable', $variables_int["out_var"])->first();
                        if($variables_formato){
                            $var_minutas_db = Var_minuta::all()
                            ->where('cod_minuta', $cod_minuta)
                            ->where('sec_var', $variables_int["sec_var"])
                            ->first();
                            if(!empty($var_minutas_db)){     
                                $var_minutas_db->update($variables_int);
                                $message_array[] = "La secuencia ".$variables_int["sec_var"]." ya existia, asi que fue actualizada correctamente";
                            }
                            else{
                                $message_array[] = "La secuencia ".$variables_int["sec_var"]." fue registrada correctamente";
                                Var_minuta::create($variables_int);
                            }
                        }
                        else{
                            $message_error_array[] = "Secuencia ".$variables_int["sec_var"]." = El campo out_var = ".$variables_int["out_var"]." no existe en la tabla Variables Formatos.";
                        }

                    }else{
                        $message_error_array[] = "Secuencia ".$variables_int["sec_var"]." = El campo tip_var = ".$variables_int["tip_var"]." no existe en la tabla Tipo Variable";
                    }

                }         
                $res['error'] = false;
                $res['msg'] = $message_array; 
                $res['msg_error'] = $message_error_array;     
            }
            
        }
        return response()->json($res,$message_code);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Var_minuta $var_minuta)
    {
        return response()->json([
            'res' => true,
            'texto_minuta' => $var_minuta
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
}
