<?php

namespace App\Http\Requests\General;

use Illuminate\Foundation\Http\FormRequest;

class GuardarGeneralRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(){
        return [
            'rad_minuta' => 'required|string|max:20',
            'cod_minuta' => 'required|integer',
            'nro_escritura' => 'required|string|max:32',
            'fec_escritura' => 'required|date_format:Y/m/d',
            'nro_hojas' => 'required|string|max:65535',
            'vlr_acto1' => 'required|integer',
            'vlr_acto2' => 'required|integer',
            'vlr_acto3' => 'required|integer',
            'vlr_acto4' => 'required|integer',
            'mayor_avaluo' => 'required|integer',
            //'por_clausula' => 'required|numeric|max:10|regex:/^\d*\.\d{10,2}$/',
            'por_clausula' => 'required|numeric|max:10',

            'vlr_clausula' => 'required|integer',
            'txt_clausula' => 'string|max:65535',
            'nro_resolucion' => 'required|string|max:10',
            'ano_resolucion' => 'required|integer',
            'vlr_derechos' => 'required|integer',
            'vlr_retefuente' => 'required|integer',
            'vlr_aportes' => 'required|integer',
            'fecha_firma' => 'required|date_format:Y/m/d',
            'hora_firma' => 'required|string|max:10',
            'notaria_firma' => 'required|string|max:50',
            'ciudad_firma' => 'required|string|max:50',
            'notario_firma' => 'required|string|max:50',
            'txt_designacion' => 'string|max:65535',
            'imp_consumo' => 'required|string|max:10',
            'imp_renta' => 'required|string|max:10',
        ];
    }
}
