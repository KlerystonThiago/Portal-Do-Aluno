<?php
    session_start();
    include '../model/disciplinasModel.php';
    
    class DisciplinasController{
        public function getDisciplinas(){
            $disciplina = new Disciplina;
            $disciplina = $disciplina->pegaDisciplinas();
            $cont = 0;
            
            $status = $curso['status'];           
            
            foreach($disciplina['disciplinas'] as $disciplinas){
                echo "<tr class='gradeX'>";
                    echo "<td class='valign'>";
                        echo $disciplina['disciplinas'][$cont]['nome'];
                    echo "</td>";
                    if($_SESSION['nivelDeAcessoUsuario'] == '1'){
                        echo "<td class='valign'  style='text-align:center;'>";
                            echo "<a href='portal.php?link=10&id=".$disciplina['disciplinas'][$cont]['idCurso']."&idd=".$disciplina['disciplinas'][$cont]['id']."' class='btn btn-success btn-sm btnSpace'><i class='fa fa-pencil-square-o'></i> Editar</a>";
                            echo "<a href='controller/disciplinasController.php?form=del&id=".$disciplina['disciplinas'][$cont]['id']."' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i> Excluir</a>";
                        echo "</td>";
                    }
                echo "</tr>";
                $cont = $cont+1;
            }
        }

        public function getDadosDisciplinas($id, $dado){
            $disciplina = new Disciplina();
            $disciplina = $disciplina->pegaDisciplinas();
            $cont = 0;
            $status = $disciplina['status'];           
            
            foreach($disciplina['disciplinas'] as $disciplinas){
                if($disciplina['disciplinas'][$cont]['id'] == $id){
                    $dados = $disciplina['disciplinas'][$cont][$dado];
                }            
                $cont = $cont+1;
            }            
            echo $dados;
        }
        
        public function cadDisciplina(){
            $disciplina = new Disciplina();
            $disciplina = $disciplina->cadastrarDisciplina(
                $_POST['nomeDisciplina'],
                $_POST['cursoDisciplina']
            );
            
            $status = $disciplina['status'];

            if($status == 'true'){
                $_SESSION['success'] = 'Disciplina Cadastrada Com Sucesso';
                echo "<script>window.location.href='../portal.php?link=3';</script>";
            }
            else{
                $_SESSION['error'] = 'Erro ao Cadastra Disciplina';
                echo "<script>window.location.href='../portal.php?link=9';</script>";
            }
        }

        public function alterarDisciplina(){
            $disciplina = new Disciplina();            
            $disciplina = $disciplina->alterarDisciplina(
                $_POST['idd'],
                $_POST['nomeDisciplina'],
                $_POST['idCurso']
            );
            $status = $disciplina['status'];

            if($status == 'true'){
                $_SESSION['success'] = 'Disciplina Alterada Com Sucesso';
                echo "<script>window.location.href='../portal.php?link=3';</script>";
            }
            else{
                $_SESSION['error'] = 'Erro ao Salvar Alterações na Disciplina';
                echo "<script>window.location.href='../portal.php?link=13';</script>";
            }
        }

        public function deletarDisciplinas(){
            $disciplina = new Disciplina();            
            $disciplina = $disciplina->deletarDisciplina(
                $_GET['id']
            );
            
            $status = $disciplina['status'];

            if($status == 'true'){
                $_SESSION['success'] = 'Disciplina Deletada Com Sucesso';
                echo "<script>window.location.href='../portal.php?link=3';</script>";
            }
            else{
                $_SESSION['error'] = 'Erro ao Excluir o Disciplina';
                echo "<script>window.location.href='../portal.php?link=3';</script>";
            }
        }
    }


    if($_POST['form'] == 'formCadDisciplina'){
        $disciplina = new DisciplinasController;
        $disciplina->cadDisciplina();
    }

    if($_POST['form'] == 'formEditDisciplina'){
        $disciplina = new DisciplinasController;
        $disciplina->alterarDisciplina();
    }

    if($_GET['form'] == 'del'){
        $disciplina = new DisciplinasController;
        $disciplina->deletarDisciplinas();
    }

?>