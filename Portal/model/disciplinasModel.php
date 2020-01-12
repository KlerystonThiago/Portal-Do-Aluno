
<?php

class Disciplina{

    public function pegaDisciplinas(){

        $dados = http_build_query(array(
            
        ));
    
        $contexto = stream_context_create(array(
            'http' => array(
                'method' => 'GET',
                'content' => $dados,
                'header' => "Content-type: application/x-www-form-urlencoded\r\n"
                . "Content-Length: " . strlen($dados) . "\r\n",
            )
        ));
        
        $resposta = file_get_contents('http://localhost:8000/api/disciplinas/', null, $contexto);
        $json = json_decode($resposta, true);
        
        return $json;
    } 

    public function cadastrarDisciplina($nome, $idCurso){

        $dados = http_build_query(array(
            "nome" => $nome,
            "idCurso" => $idCurso
        ));
    
        $contexto = stream_context_create(array(
            'http' => array(
                'method' => 'POST',
                'content' => $dados,
                'header' => "Content-type: application/x-www-form-urlencoded\r\n"
                . "Content-Length: " . strlen($dados) . "\r\n",
            )
        ));
        
        $resposta = file_get_contents('http://localhost:8000/api/disciplinas', null, $contexto);
        $json = json_decode($resposta, true);
        
        return $json;
    }

    public function alterarDisciplina($id, $nome, $idCurso){

        $dados = http_build_query(array(
            "nome" => $nome,
            "idCurso" => $idCurso
        ));
    
        $contexto = stream_context_create(array(
            'http' => array(
                'method' => 'PUT',
                'content' => $dados,
                'header' => "Content-type: application/x-www-form-urlencoded\r\n"
                . "Content-Length: " . strlen($dados) . "\r\n",
            )
        ));
        
        $resposta = file_get_contents('http://localhost:8000/api/disciplinas/'.$id, null, $contexto);
        $json = json_decode($resposta, true);
        
        return $json;
    }         


    public function deletarDisciplina($id){

        $dados = http_build_query(array(
        ));
    
        $contexto = stream_context_create(array(
            'http' => array(
                'method' => 'DELETE',
                'content' => $dados,
                'header' => "Content-type: application/x-www-form-urlencoded\r\n"
                . "Content-Length: " . strlen($dados) . "\r\n",
            )
        ));
        
        $resposta = file_get_contents('http://localhost:8000/api/disciplinas/'.$id, null, $contexto);
        $json = json_decode($resposta, true);
        
        return $json;
    }
}



?>