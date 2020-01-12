<?php
    
    include '../model/usuariosModel.php';
    include '../model/alunosModel.php';
    session_start();

    class Usuario{
        public function getUsuarios(){
            $usuario = new Usuarios;
            $usuario = $usuario->pegaUsuarios();
            $cont = 0;
            
            $status = $usuario['status'];           
            
            foreach($usuario['usuarios'] as $usuarios){
                if(($_GET['user'] == 'Admins') AND ($usuario['usuarios'][$cont]['nivelDeAcesso'] == '1')){
                    echo "<tr class='gradeX'>";
                        echo "<td class='valign'>";
                            echo $usuario['usuarios'][$cont]['nome']." ".$usuario['usuarios'][$cont]['sobreNome'];
                        echo "</td>";
                        echo "<td class='valign'>";
                            echo $usuario['usuarios'][$cont]['email'];
                        echo "</td>";
                        echo "<td class='valign'  style='text-align:center;'>";
                            echo "<a href='portal.php?link=14&id=".$usuario['usuarios'][$cont]['id']."' class='btn btn-success btn-sm btnSpace'><i class='fa fa-pencil-square-o'></i> Editar</a>";
                            echo "<a href='controller/usuarioController.php?acao=del&id=".$usuario['usuarios'][$cont]['id']."' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i> Excluir</a>";
                        echo "</td>";                        
                    echo "</tr>";
                }
                else if(($_GET['user'] == 'Professores') AND ($usuario['usuarios'][$cont]['nivelDeAcesso'] == '2')){
                    echo "<tr class='gradeX'>";
                        echo "<td class='valign'>";
                            echo $usuario['usuarios'][$cont]['nome']." ".$usuario['usuarios'][$cont]['sobreNome'];
                        echo "</td>";
                        echo "<td class='valign'>";
                            echo $usuario['usuarios'][$cont]['email'];
                        echo "</td>";
                        echo "<td class='valign'  style='text-align:center;'>";
                            echo "<a href='portal.php?link=14&id=".$usuario['usuarios'][$cont]['id']."' class='btn btn-success btn-sm btnSpace'><i class='fa fa-pencil-square-o'></i> Editar</a>";
                            echo "<a href='controller/usuarioController.php?acao=del&id=".$usuario['usuarios'][$cont]['id']."' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i> Excluir</a>";
                        echo "</td>";                        
                    echo "</tr>";
                }
                else if(($_GET['user'] == 'Alunos') AND ($usuario['usuarios'][$cont]['nivelDeAcesso'] == '3')){
                    echo "<tr class='gradeX'>";
                        echo "<td class='valign'>";
                            echo $usuario['usuarios'][$cont]['nome']." ".$usuario['usuarios'][$cont]['sobreNome'];
                        echo "</td>";
                        echo "<td class='valign'>";
                            echo $usuario['usuarios'][$cont]['email'];
                        echo "</td>";
                        echo "<td class='valign'  style='text-align:center;'>";
                            echo "<a href='portal.php?link=15&id=".$usuario['usuarios'][$cont]['id']."' class='btn btn-primary btn-sm '><i class='fa fa-pencil-square-o'></i> Matricular</a>";
                            echo "<a href='portal.php?link=14&id=".$usuario['usuarios'][$cont]['id']."' class='btn btn-success btn-sm btnSpace'><i class='fa fa-pencil-square-o'></i> Editar</a>";
                            echo "<a href='controller/usuarioController.php?acao=del&id=".$usuario['usuarios'][$cont]['id']."' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i> Excluir</a>";                            
                        echo "</td>";                        
                    echo "</tr>";
                }
                $cont = $cont+1;
            }
        }

        public function cadAluno(){
            $aluno = new Aluno();
            $aluno->cadastrarAluno(
                $_POST['nomeUsuario'],
                $_POST['sobreNomeUsuario'],
                $_POST['emailUsuario'],
                $_POST['senhaUsuario'],
                $_POST['nivelDeAcesso']
            );            
        }

        public function cadUsuario(){
            $usuario = new Usuarios();
            $usuario = $usuario->cadastrarUsuario(
                $_POST['nomeUsuario'],
                $_POST['sobreNomeUsuario'],
                $_POST['emailUsuario'],
                $_POST['senhaUsuario'],
                $_POST['nivelDeAcesso']
            );     
            
            $status = $usuario['status'];

            if($status == 'true'){
                $_SESSION['success'] = 'Usuário Cadastrado Com Sucesso';
                echo "<script>window.location.href='../portal.php?link=4';</script>";
            }
            else{
                $_SESSION['error'] = 'Erro ao Cadastrar Usuário';
                echo "<script>window.location.href='../portal.php?link=12';</script>";
            }       
        }

        function getDadosUsuario($id, $dado){
            $usuario = new Usuarios();
            $usuario = $usuario->pegaUsuarios();
            $cont = 0;
            $status = $usuario['status'];           
            
            foreach($usuario['usuarios'] as $usuarios){
                if($usuario['usuarios'][$cont]['id'] == $id){
                    $dados = $usuario['usuarios'][$cont][$dado];
                }            
                $cont = $cont+1;
            }            
            return $dados;
        }

        public function alterarUsuario(){
            $usuario = new Usuarios();            
            $usuario = $usuario->alterarUsuario(
                $_POST['id'],
                $_POST['nomeUsuario'],
                $_POST['sobreNomeUsuario'],
                $_POST['emailUsuario'],
                $_POST['nivelDeAcesso']
            );
            $status = $usuario['status'];

            if($status == 'true'){
                $_SESSION['success'] = 'Dados Alterados Com Sucesso';
                echo "<script>window.location.href='../portal.php?link=4';</script>";
            }
            else{
                $_SESSION['error'] = 'Erro ao Salvar Alterações do Usuário';
                echo "<script>window.location.href='../portal.php?link=14&id=".$_POST['id']."';</script>";
            }
        }

        public function deletarUsuario(){
            $usuario = new Usuarios();            
            $usuario = $usuario->deletarUsuario(
                $_GET['id']
            );
            
            $status = $usuario['status'];

            if($status == 'true'){
                $_SESSION['success'] = 'Usuário Deletado Com Sucesso';
                echo "<script>window.location.href='../portal.php?link=4';</script>";
            }
            else{
                $_SESSION['error'] = 'Erro ao Excluir o Disciplina';
                echo "<script>window.location.href='../portal.php?link=3';</script>";
            }
        }
        
        public function getImgUser(){        
            if($_SESSION['logado'] == true){
                if($_SESSION['nivelDeAcessoUsuario'] == 1){
                    $imgPerfil = 'admin.png';
                }
                else if($_SESSION['nivelDeAcessoUsuario'] == 2){
                    $imgPerfil = 'professor.png';
                }
                else if($_SESSION['nivelDeAcessoUsuario'] == 3){
                    $imgPerfil = 'aluno.png';
                }
            }
            return $imgPerfil;
        }

        public function getNivelAcesso(){        
            if($_SESSION['logado'] == true){
                if($_SESSION['nivelDeAcessoUsuario'] == 1){
                    $nivel = 'Administrador';
                }
                else if($_SESSION['nivelDeAcessoUsuario'] == 2){
                    $nivel = 'Professor';
                }
                else if($_SESSION['nivelDeAcessoUsuario'] == 3){
                    $nivel = 'Aluno';
                }
            }
            return $nivel;
        }

        public function louOut(){            
            session_destroy();
        }
    }

    $usuario = new Usuario;


    if($_POST['form'] == 'formCadAluno'){
        $cad = new Usuario;
        $cad->cadAluno();

        if($cad){
            $_SESSION['success'] = 'Cadastro Efetuado Com Sucesso';
            echo "<script>window.location.href='../index.php';</script>";
        }
        else{
            $_SESSION['error'] = 'Erro ao Cadastrar';
            echo "<script>window.location.href='../index.php';</script>";
        }
    }

    if($_POST['form'] == 'formLogin'){
        $aluno = new Aluno;
        $user = $aluno->logarAluno($_POST['email'], $_POST['senha']);
        
        $logado = $user['logado'];
        
        if($logado == 'true'){
            $_SESSION['nomeUsuario'] =              $user['dados']['nome'];
            $_SESSION['sobreNomeUsuario'] =         $user['dados']['sobreNome'];
            $_SESSION['emailUsuario'] =             $user['dados']['email'];
            $_SESSION['nivelDeAcessoUsuario'] =     $user['dados']['nivelDeAcesso'];
            $_SESSION['senhaUsuario'] =             $_POST['senha'];
            $_SESSION['logado'] =                   true;

            echo "<script>window.location.href='../portal.php';</script>";
        }
        else{
            $_SESSION['error'] = 'Usuário ou Senha Invalidos';
            echo "<script>window.location.href='../index.php';</script>";
        }        
    }

    if($_GET['acao'] == 'logout'){
        $usuario->louOut();                        
        echo "<script>window.location.href='../index.php';</script>";
    }
    
    
    if($_POST['form'] == 'formCadUsuario'){
        $usuario->cadUsuario();
    }

    if($_POST['form'] == 'formEditUsuario'){
        $usuario->alterarUsuario();
    }

    if($_GET['acao'] == 'del'){
        $usuario->deletarUsuario();                        
        echo "<script>window.location.href='../portal.php?link=4';</script>";
    }
    
    

    
    

    
      

?>