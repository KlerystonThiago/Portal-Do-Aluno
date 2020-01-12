
<?php

    class Aluno{
        private $nome;
        private $sobreNome;
        private $email;
        private $senha;
        private $nivelDeAcesso;

        public function cadastrarAluno($nome, $sobreNome, $email, $senha, $nivelDeAcesso){
            $iniciar = curl_init('http://localhost:8000/api/usuarios');
            curl_setopt($iniciar, CURLOPT_RETURNTRANSFER, true);

            $dados = array(
                "nome" => $nome,
                "sobreNome" => $sobreNome,
                "email" => $email,
                "senha" => $senha,
                "nivelDeAcesso" => $nivelDeAcesso,
            );

            curl_setopt($iniciar, CURLOPT_POST, true);
            curl_setopt($iniciar, CURLOPT_POSTFIELDS, $dados);
            curl_exec($iniciar);            
            curl_close($iniciar);
        }

        public function logarAluno($login, $senha){
            $dados = http_build_query(array(
                'login' => $login,
                'senha' => $senha
            ));
        
            $contexto = stream_context_create(array(
                'http' => array(
                    'method' => 'POST',
                    'content' => $dados,
                    'header' => "Content-type: application/x-www-form-urlencoded\r\n"
                    . "Content-Length: " . strlen($dados) . "\r\n",
                )
            ));
            
            $resposta = file_get_contents('http://localhost:8000/api/login', null, $contexto);    
            $json = json_decode($resposta, true);
            
            return $json;
        }

    }
?>