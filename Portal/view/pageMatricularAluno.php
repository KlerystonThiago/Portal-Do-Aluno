    <?php $usuario = new Usuario; ?>
    <section id="main-content">
        <section class="wrapper site-min-height">            
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="topoPage">
                        <div class="sombraTopoPage"></div>
                        <div class="onteudoTopoPage toptop2">
                            <h3>Matricular Aluno</h3>                            
                        </div>
                    </div>
                    <div class="conteudoCursos pg">                    
                        <form name="formRegistro" action="controller/matriculaController.php" method="POST">
                            <div class="row">
                                <div class="form-group col-sm-7">
                                    <label for="nomeCurso">Nome do Aluno</label>
                                    <input type="text" value="<?php echo $usuario->getDadosUsuario($_GET['id'], 'nome')." ".$usuario->getDadosUsuario($_GET['id'], 'sobreNome'); ?>" name="aluno" class="form-control" id="nomeCurso" placeholder="Digite o Nome da Disciplina" disabled required>
                                    <input type="hidden" name="form" value="formMatriculaAluno">
                                    <input type="hidden" name="idAluno" value="<?php echo $_GET['id']; ?>">
                                </div>
                                <div class="form-group col-sm-7">
                                    <label for="inputState">Curso</label>
                                    <select name="curso" id="inputState" class="form-control">
                                        <?php
                                            $nomeCurso = new CursoController;
                                            $nomeCurso->getNomesCurso();
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-7">
                                    <button type="submit" class="btn btn-primary toptop">Matricular Aluno</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </section>