<?php

namespace App\Http\Requests\Var_minuta;

use Illuminate\Foundation\Http\FormRequest;

class GuardarVar_minutaRequest extends FormRequest
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
        /*$validator = Validator::make($request->all(), [
            'row.*.title' => 'required',
            'row.*.post' => 'required',
        ]);*/
        return [
            'cod_minuta' => 'required',
            'variables' => 'required|array',


            'variables.*.sec_var' => 'required|int',
            'variables.*.nom_var' => 'required|string',
            'variables.*.tip_var' => 'required|int',
            'variables.*.out_var' => 'required|int',
            'variables.*.tabla_var' => 'required|int',
            'variables.*.mod_var' => 'required|int',
            'variables.*.contr_var' => 'required|int',
        ];
    }
}
