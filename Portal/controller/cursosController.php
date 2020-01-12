<?php

    include '../model/cursosModel.php';
    session_start();

    class CursoController{
        public function cadCurso(){
            $curso = new Curso();
            $curso = $curso->cadastrarCurso(
                $_POST['nomeDoCurso'],
                $_POST['numDePeriodos'],
                $_POST['turno']
            );
            $status = $curso['status'];

            if($status == 'true'){
                $_SESSION['success'] = 'Curso Cadastrado Com Sucesso';
                echo "<script>window.location.href='../portal.php?link=2';</script>";
            }
            else{
                $_SESSION['error'] = 'Erro ao Cadastra Curso';
                echo "<script>window.location.href='../portal.php?link=7';</script>";
            }
        }
        
        public function alterarCursos(){
            $curso = new Curso();            
            $curso = $curso->alterarCurso(
                $_POST['id'],
                $_POST['nomeDoCurso'],
                $_POST['numDePeriodos'],
                $_POST['turno']
            );
            $status = $curso['status'];

            if($status == 'true'){
                $_SESSION['success'] = 'Curso Alterado Com Sucesso';
                echo "<script>window.location.href='../portal.php?link=8&id=".$_POST['id']."';</script>";
            }
            else{
                $_SESSION['error'] = 'Erro ao Salvar Alterações no Curso';
                echo "<script>window.location.href='../portal.php?link=8&id=".$_POST['id']."';</script>";
            }
        } 

        public function getCursos(){            
            $curso = new Curso();
            $curso = $curso->pegaCurso();
            $cont = 0;
            $status = $curso['status'];           
            
            foreach($curso['cursos'] as $cursos){
                echo "<tr class='gradeX'>";
                    echo "<td class='valign'>";
                        echo $curso['cursos'][$cont]['nomeDoCurso'];
                    echo "</td>";
                    echo "<td class='valign'>";
                        echo $curso['cursos'][$cont]['numDePeriodos'];
                    echo "</td>";
                    echo "<td class='valign'>";
                        echo $curso['cursos'][$cont]['turno'];
                    echo "</td>";
                    if($_SESSION['nivelDeAcessoUsuario'] == '1'){
                        echo "<td class='valign'  style='text-align:center;'>";
                            echo "<a href='portal.php?link=8&id=".$curso['cursos'][$cont]['id']."' class='btn btn-success btn-sm btnSpace'><i class='fa fa-pencil-square-o'></i> Editar</a>";
                            echo "<a href='controller/cursosController.php?form=del&id=".$curso['cursos'][$cont]['id']."' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i> Excluir</a>";
                        echo "</td>";
                    }
                echo "</tr>";
                $cont = $cont+1;
            }
        }

        public function getDadosCurso($id, $dado){
            $curso = new Curso();
            $curso = $curso->pegaCurso();
            $cont = 0;
            $status = $curso['status'];           
            
            foreach($curso['cursos'] as $cursos){
                if($curso['cursos'][$cont]['id'] == $id){
                    $dados = trim($curso['cursos'][$cont][$dado]);
                }            
                $cont = $cont+1;
            }            
            return $dados;
        }

        public function getNomesCurso(){
            $curso = new Curso();
            $curso = $curso->pegaCurso();
            $cont = 0;
            $status = $curso['status'];                       
            
            foreach($curso['cursos'] as $cursos){
                if($_GET['id']){
                    if($_GET['id'] == $curso['cursos'][$cont]['id']){
                        echo "<option value='".$curso['cursos'][$cont]['id']."' selected>".$curso['cursos'][$cont]['nomeDoCurso']."</option>";
                    }
                    else{
                        echo "<option value='".$curso['cursos'][$cont]['id']."'>".$curso['cursos'][$cont]['nomeDoCurso']."</option>";
                    }
                }
                else{
                    echo "<option value='".$curso['cursos'][$cont]['id']."'>".$curso['cursos'][$cont]['nomeDoCurso']."</option>";
                }
                
                $cont = $cont+1;
            }
            return $dados;
        }
        
        public function deletarCurso(){
            $curso = new Curso();            
            $curso = $curso->deletarCurso(
                $_GET['id']
            );
            
            $status = $curso['status'];

            if($status == 'true'){
                $_SESSION['success'] = 'Curso Deletado Com Sucesso';
                echo "<script>window.location.href='../portal.php?link=2';</script>";
            }
            else{
                $_SESSION['error'] = 'Erro ao Excluir o Curso';
                echo "<script>window.location.href='../portal.php?link=2';</script>";
            }
        }

    }   
    
    if($_POST['form'] == 'formCadCurso'){
        $curso = new CursoController;
        $curso->cadCurso();
    }

    if($_POST['form'] == 'formEditCurso'){
        $curso = new CursoController;
        $curso->alterarCursos();
    }

    if($_GET['form'] == 'del'){
        $curso = new CursoController;
        $curso->deletarCurso();
    }
?>