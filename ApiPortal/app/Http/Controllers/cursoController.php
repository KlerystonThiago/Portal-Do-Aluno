<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;

class cursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curso = Curso::all();
        
        return response()->json(['cursos'=>$curso, 'status'=>true]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $curso = Curso::create($dados);
        
        if($curso){
            return response()->json(['status'=>'true']);
        }
        else{
            return response()->json(['data'=>'Erro ao Cadastrar o Curso', 'status'=>'false']);
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
        $curso = Curso::find($id);
        if($curso){
            return response()->json(['curso'=>$curso, 'status'=>'true']);
        }
        else{
            return response()->json(['status'=>'false']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $curso = Curso::find($id);
        $dados = $request->all();
        $curso->update($dados);

        if($curso){
            return response()->json(['data'=>$curso, 'status'=>'true']);
        }
        else{
            return response()->json(['status'=>'false']);
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
        $curso = Curso::find($id);

        if($curso){
            $curso->delete();
            if($curso){
                return response()->json(['status'=>'true']);
                
            }
            else{
                return response()->json(['status'=>'false']);
            }
        }
        else{
            return response()->json(['data'=>'Usuário Não Encontrado', 'status'=>'false']);
        }
    }
}
