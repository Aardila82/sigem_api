<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarTexto_minutaRequest extends FormRequest
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
           'titulo_minuta' => 'required',
            'nro_variables' => 'required',
            'texto_minuta' => 'required',
            'tipo_rad' => 'required',
            'estado_minuta' => 'required',
            'permissions ' => ''
        ];
    }
}
