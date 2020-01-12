
<?php

class Usuarios{

    public function pegaUsuarios(){

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
        
        $resposta = file_get_contents('http://localhost:8000/api/usuarios/', null, $contexto);
        $json = json_decode($resposta, true);
        
        return $json;
    } 

    public function cadastrarUsuario($nome, $sobrenome, $email, $senha, $nivelDeAcesso){

        $dados = http_build_query(array(
            "nome" => $nome,
            "sobreNome" => $sobrenome,
            "email" => $email,
            "senha" => $senha,
            "nivelDeAcesso" => $nivelDeAcesso
        ));
    
        $contexto = stream_context_create(array(
            'http' => array(
                'method' => 'POST',
                'content' => $dados,
                'header' => "Content-type: application/x-www-form-urlencoded\r\n"
                . "Content-Length: " . strlen($dados) . "\r\n",
            )
        ));
        
        $resposta = file_get_contents('http://localhost:8000/api/usuarios', null, $contexto);
        $json = json_decode($resposta, true);
        
        return $json;
    }

    public function alterarUsuario($id, $nome, $sobrenome, $email, $nivelDeAcesso){

        $dados = http_build_query(array(
            "nome" => $nome,
            "sobreNome" => $sobrenome,
            "email" => $email,
            "nivelDeAcesso" => $nivelDeAcesso
        ));
    
        $contexto = stream_context_create(array(
            'http' => array(
                'method' => 'PUT',
                'content' => $dados,
                'header' => "Content-type: application/x-www-form-urlencoded\r\n"
                . "Content-Length: " . strlen($dados) . "\r\n",
            )
        ));
        
        $resposta = file_get_contents('http://localhost:8000/api/usuarios/'.$id, null, $contexto);
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


    public function deletarUsuario($id){

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
        
        $resposta = file_get_contents('http://localhost:8000/api/usuarios/'.$id, null, $contexto);
        $json = json_decode($resposta, true);
        
        return $json;
    }
}



?>