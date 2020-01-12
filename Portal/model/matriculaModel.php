<?php
    class Matricula{
        public function matricularUser($idAluno, $idCurso){

            $dados = http_build_query(array(
                "idAluno" => $idAluno,
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
            
            $resposta = file_get_contents('http://localhost:8000/api/matriculas/', null, $contexto);
            $json = json_decode($resposta, true);
            
            return $json;
        }
    }
?>