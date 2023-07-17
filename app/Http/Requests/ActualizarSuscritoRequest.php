<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarSuscritoRequest extends FormRequest
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
    public function rules()
    {
        return [


            'suscr_pers'=> 'required',
            'suscr_razon'=> 'required',
            'suscr_nit' => 'required',
            'suscr_direccion'=> 'required',
            'suscr_domicilio'=> 'required',
            'suscr_nombre'=> 'required',
            'suscr_tipodoc'=> 'required',
            'suscr_nrodoc'=> 'required',
            'suscr_ciudoc' => 'required',
            'suscr_sexo' => 'required',
            'suscr_estcivil' => 'required',
            'suscr_nac'=> 'required',
            'suscr_nrocel'=> 'required',
            'suscr_email' => 'required',
            'suscr_ocupacion' => 'required',
        ];
    }
}
