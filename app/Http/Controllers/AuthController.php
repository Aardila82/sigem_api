<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActualizarContrasenaRequest;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

use App\Http\Requests\User\GuardarUserRequest;
use App\Http\Requests\User\ActualizarUserRequest;
use App\Models\CambioContrasena;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Str;


class AuthController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */    
    public function registro(GuardarUserRequest $request){

        //var_dump(auth('sanctum')->user()->username);

        $dateNow = Carbon::now();
        /*$user = new User();
        $user->name=$request->name;
        $user->cedula=$request->cedula;
        $user->email=$request->email;
        $user->telefono=$request->telefono;
        $user->username=auth('sanctum')->user()->username;
        $user->password=Hash::make($request->password);
        $user->profile=$request->profile;
        $user->status=$request->status;
        $user->access_type=$request->access_type;
        $user->user_type=$request->user_type;

        $user->created_by=$request->created_by;
        $user->date_created= $dateNow;
        $user->modified_by=$request->modified_by;
        $user->date_modified=$request->date_modified;
        //$user->save();
        var_dump((Array)$user);*/
        
        //var_dump( $request->all());
        $user = $request->all();
        $user["password"] = "";
        $user["password_api"] = Hash::make($request->password);
        $user["status"] = "ACTIVO";
        $user["date_created"] = $dateNow;
        $user["created_by"] = auth('sanctum')->user()->username;
        $user["date_modified"] = $dateNow;
        $user["modified_by"] = auth('sanctum')->user()->username;

        User::create($user);

        return response()->json([
            'res' => true,
            "mensaje " => "usuario registrado correctamente"
        ],200);
    }

    /*public function login(Request $request){
        $request->validate([ 
            'username' => 'required',
            'password' => 'required'
            ]);

            $user=User::where("username", "=", $request->username)->first();
            if(isset($user)){
                if(Hash::check($request->password, $user->password)){
                    $token =$user->createToken("auth_token")->plainTextToken;
                    return response()->json(["mensaje " => "se inicio sesion", "acces_token" => $token]);
                }else{
                    return response()->json(["mensaje " => "password incorrecto", "error" => true],200);
                }    
        }else{
            return response()->json(["mensaje " => "usuario No existe", "error" => true],200);
        }

    }*/


    public function login(Request $request){
        $request->validate([
        'username' => 'required', 
        'password' => 'required',
        ]);

        $user=User::where("username", "=", $request->username)->first();
        if(isset($user)){
            if($user["status"] == "ACTIVO"){
                if(Hash::check($request->password, $user->password_api)){
                    $token =$user->createToken("auth_token")->plainTextToken;
                    return response()->json(["mensaje " => "se inicio sesion", "acces_token" => $token]);
                }else{
                    return response()->json(["mensaje " => "password incorrecto", "error" => true],200);
                }
                
            }
            else{
                return response()->json(["mensaje " => "usuario inactivo", "error" => true],403);
            }
        }else{
            return response()->json(["mensaje " => "usuario No existe", "error" => true],401);
        }            
    }

    
    public function perfil(){
        return Auth::user();
    }

    public function logout(){
        Auth::user()->tokens()->delete();
        return response()->json(["status"=> 1, "mensaje " => "se cerro correctamente"]);
    }

    public function update(ActualizarUserRequest $request, User $user)
    {
        $user->update($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'User Actualizado Correctamente' 
        ],200);
    }

    public function cambio_contrasena(ActualizarContrasenaRequest $request, User $user)
    {
        $user_data = $request->all();
        $user_data["password_api"] = Hash::make($request->password_api);

        var_dump( $user_data);

        $user->forceFill([
            'password_api' => Hash::make($request->password_api)
        ]);

        $user->save();

        event(new PasswordReset($user));
        
        $status = Password::reset(
            $request->only('password_api', 'password_api_confirmation'),

            function ($user, $password_api) {
                $user->forceFill([
                    'password_api' => Hash::make($password_api)
                ])->setRememberToken(Str::random(60));
     
                $user->save();
     
                event(new PasswordReset($user));
            }
        );
                
        //$user->update($user_data);
        /*return response()->json([
            'res' =>  Password::PASSWORD_RESET,
            'msg' => 'Apoderado Actualizado Correctamente'. $status
        ],200);*/
        return $status === Password::PASSWORD_RESET;
    }

}
           
           

