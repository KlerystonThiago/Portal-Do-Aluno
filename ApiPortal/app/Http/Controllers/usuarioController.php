<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class usuarioController extends Controller
{
    public function __construct(){
        header('Access-Control-Allow-Origin: *');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $usuario = Usuario::all();
        
        return response()->json(['usuarios'=>$usuario, 'status'=>true]);
    }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->all();
        $dados['senha'] = Hash::make($dados['senha']);
        $usuario = Usuario::create($dados);
        
        if($usuario){
            return response()->json(['status'=>'true']);
            redirect()->to($url);
        }
        else{
            return response()->json(['data'=>'Erro ao Cadastrar o Usuário', 'status'=>'false']);
        }        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = Usuario::find($id);
        if($usuario){
            return response()->json(['data'=>$usuario, 'status'=>true]);
        }
        else{
            return response()->json(['data'=>'Usuário Não Encontrado.', 'status'=>false]);
        }
    }    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        $dados = $request->all();
        $usuario->update($dados);

        if($usuario){
            return response()->json(['data'=>$usuario, 'status'=>'true']);
        }
        else{
            return response()->json(['data'=>'Erro ao Salvar os Dados de Usuário.', 'status'=>'false']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id);

        if($usuario){
            $usuario->delete();
            if($usuario){
                return response()->json(['data'=>'Usuário Excluido Com Sucesso', 'status'=>'true']);
                
            }
            else{
                return response()->json(['data'=>'Usuário Não Pode Ser Excluido', 'status'=>'false']);
            }
        }
        else{
            return response()->json(['data'=>'Usuário Não Encontrado', 'status'=>'false']);
        }
        
    }
}
