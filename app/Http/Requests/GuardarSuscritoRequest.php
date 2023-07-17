<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarSuscritoRequest extends FormRequest
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
            'rad_minuta' => 'required|string|unique:suscritos,rad_minuta|max:20',
            'cod_minuta' => 'required|integer',
            'suscr_id' => 'required',
            'suscr_tipo' => 'required|integer',
            'suscr_pers' => 'required|string|max:20',
            'suscr_razon' => 'required|string|max:255',
            'suscr_nit' => 'required|string|max:12',
            'suscr_direccion' => 'required|string|max:256',
            'suscr_domicilio' => 'required|string|max:64',
            'suscr_nombre' => 'required|string|max:64',
            'suscr_tipodoc' => 'required|string|max:10',
            'suscr_nrodoc' => 'required|string|max:32',
            'suscr_ciudoc' => 'required|string|max:64',
            'suscr_sexo' => 'required|string|max:32',
            'suscr_estcivil' => 'required|string|max:128',
            'suscr_nac' => 'required|string|max:32',
            'suscr_nrocel' => 'required|string|max:32',
            'suscr_email' => 'required|string|max:128',
            'suscr_ocupacion' => 'required|string|max:128'
        ];
    }
}

?>