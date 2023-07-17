<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarUserRequest extends FormRequest
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
                //'id_user' => 'required', 
                'name' => 'required',
                'cedula' => 'required',
                'email' => 'required', 
                'telefono' => 'required',
                //'username' => 'required|unique:users',
                //'password' => 'required|confirmed',
                //'profile' => 'required', 
                //'status' => 'required', 
                //'access_type' => 'required',
                //'user_type' => 'required', 
                //'created_by' => 'required', 
                //'date_created' => 'required',
                //'modified_by' => 'required',
                //'date_modified '=> '' 
        ];
    }
}
