<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarApoderadoRequest extends FormRequest
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
            'rad_minuta' => 'required',
            'cod_minuta' => 'required',
            'suscr_id' => 'required',
            'apod_tipo' => 'required',
            'apod_nombre' => 'required',
            'apod_tipodoc' => 'required',
            'apod_nrodoc' => 'required|unique:apoderados,apod_nrodoc',
            'apod_ciudoc' => 'required',
            'nro_escritura' => 'required',
            'fec_escritura' => 'required',
            'not_escritura' => 'required',
            'ciu_escritura' => 'required'
        ];
    }
}
