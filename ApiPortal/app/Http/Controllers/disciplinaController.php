<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disciplina;

class disciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disciplina = Disciplina::all();
        
        return response()->json(['disciplinas'=>$disciplina, 'status'=>'true']);
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
        $disciplina = Disciplina::create($dados);
        
        if($disciplina){
            return response()->json(['status'=>'true']);
        }
        else{
            return response()->json(['status'=>'false']);
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
        $disciplina = Disciplina::find($id);
        if($disciplina){
            return response()->json(['curso'=>$disciplina, 'status'=>'true']);
        }
        else{
            return response()->json(['status'=>'false']);
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
        $disciplina = Disciplina::find($id);
        $dados = $request->all();
        $disciplina->update($dados);

        if($disciplina){
            return response()->json(['data'=>$disciplina, 'status'=>'true']);
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
        $disciplina = Disciplina::find($id);

        if($disciplina){
            $disciplina->delete();
            if($disciplina){
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
