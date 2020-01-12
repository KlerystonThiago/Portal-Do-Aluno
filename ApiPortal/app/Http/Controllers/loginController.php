<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;


use Session;
//session_start();


class loginController extends Controller
{    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $login = $request->all();
        //$senha = md5($login['senha']);
        $usuario = Usuario::all();
        $logado = false;
        $id;

        
        foreach($usuario as $user){
            if($user['email'] == $login['login'] && Hash::check($login['senha'], $user['senha'])){
                $logado = true;
                $id = $user['id'];
            }
        }

        if($logado){
            $user = Usuario::find($id);
            return response()->json(['logado'=>'true', 'dados'=>$user]);
        }
        else{
            return response()->json(['logado' => 'false']);
        }
    }    
}

?>