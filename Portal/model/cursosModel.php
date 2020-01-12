
<?php

    class Curso{

        public function cadastrarCurso($nome, $numDePeriodos, $turno){

            $dados = http_build_query(array(
                "nomeDoCurso" => $nome,
                "numDePeriodos" => $numDePeriodos,
                "turno" => $turno
            ));
        
            $contexto = stream_context_create(array(
                'http' => array(
                    'method' => 'POST',
                    'content' => $dados,
                    'header' => "Content-type: application/x-www-form-urlencoded\r\n"
                    . "Content-Length: " . strlen($dados) . "\r\n",
                )
            ));
            
            $resposta = file_get_contents('http://localhost:8000/api/cursos', null, $contexto);
            $json = json_decode($resposta, true);
            
            return $json;
        }

        public function alterarCurso($id, $nome, $numDePeriodos, $turno){

            $dados = http_build_query(array(
                "nomeDoCurso" => $nome,
                "numDePeriodos" => $numDePeriodos,
                "turno" => $turno
            ));
        
            $contexto = stream_context_create(array(
                'http' => array(
                    'method' => 'PUT',
                    'content' => $dados,
                    'header' => "Content-type: application/x-www-form-urlencoded\r\n"
                    . "Content-Length: " . strlen($dados) . "\r\n",
                )
            ));
            
            $resposta = file_get_contents('http://localhost:8000/api/cursos/'.$id, null, $contexto);
            $json = json_decode($resposta, true);
            
            return $json;
        }        


        public function pegaCurso(){

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
            
            $resposta = file_get_contents('http://localhost:8000/api/cursos/', null, $contexto);
            $json = json_decode($resposta, true);
            
            return $json;
        } 


        public function deletarCurso($id){

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
            
            $resposta = file_get_contents('http://localhost:8000/api/cursos/'.$id, null, $contexto);
            $json = json_decode($resposta, true);
            
            return $json;
        }
    }


?>