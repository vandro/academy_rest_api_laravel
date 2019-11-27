<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as Controller;
use App\Http\Requests\Api\Usuario\StoreRequest;
use App\Http\Requests\Api\Usuario\LoginRequest;
use App\User;
use Illuminate\Support\Facades\Auth; 

class UsuarioController extends Controller
{
    public function register(StoreRequest $request){
        //print_r($request->all());exit;
        $request->merge([
            'password' => bcrypt($request->input('password'))
        ]); 
        $user=User::create($request->all());
        return $this->sendResponse($user,"Usuario Creado con Exito");
        
    }
    public function login(LoginRequest $request){
        //print_r($request->all());
        //exit;
        if(Auth::attempt($request->all())){
            $user=Auth::user();
            //dd($user->createToken("myApp")->accessToken);
            $result=[
                "token"=>$user->createToken("myApp")->accessToken
            ];
            return $this->sendResponse($result,"Inicio de seccion");
        }else{
            return $this->sendError("No autorizado");
        }
    }
    public function me(){
        $user=Auth::user();
        return $this->sendResponse($user,"Tu Uusario");
        
    }
}
//ErrorException: Trying to get property 
//'{"id":4,"name":"vandro","email":"vandro1@email.com","email_verified_at":null,"created_at":"2019-11-27 00:20:37","updated_at":"2019-11-27 00:20:37"}'
// of non-object in file C:\laragon\www\academy_rest_api_laravel\app\Http\Controllers\Api\UsuarioController.php on line 29

