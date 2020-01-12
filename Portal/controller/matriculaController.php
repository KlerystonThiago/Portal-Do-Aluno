<?php
    session_start();
    include '../model/matriculaModel.php';
    class MatriculaController{
        public function matricularUsuario(){
            $matricula = new Matricula();
            $matricula = $matricula->matricularUser(
                $_POST['idAluno'],
                $_POST['curso']
            );     
            
            $status = $matricula['status'];

            if($status == 'true'){
                $_SESSION['success'] = 'Matricula Realizada Com Sucesso';
                echo "<script>window.location.href='../portal.php?link=4';</script>";
            }
            else{
                $_SESSION['error'] = 'Erro ao Fazer Matricula';
                echo "<script>window.location.href='../portal.php?link=12';</script>";
            }       
        }
    }

    if($_POST['form'] == 'formMatriculaAluno'){
        $matricula = new MatriculaController();
        $matricula->matricularUsuario();
    }
?>