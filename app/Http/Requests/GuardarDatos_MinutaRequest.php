<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarDatos_MinutaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return array (
            'rad_minuta' => 'string|max:20|nullable|required',
            'cod_minuta' => 'integer|nullable|required',
            'secuencia_var' => 'integer|nullable|required',
            'contenido_var' => 'string|max:4096|nullable',
        );
    }
}
