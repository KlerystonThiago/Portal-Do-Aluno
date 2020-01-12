    
    <section id="main-content">
        <section class="wrapper site-min-height">            
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="topoPage">
                        <div class="sombraTopoPage"></div>
                        <div class="onteudoTopoPage toptop2">
                            <h3>Editar Disciplina</h3>                            
                        </div>
                    </div>
                    <div class="conteudoCursos pg">                    
                        <form name="formRegistro" action="controller/disciplinasController.php" method="POST">
                            <div class="row">
                                <div class="form-group col-sm-7">
                                    <label for="nomeCurso">Nome da Disciplina</label>
                                    <input type="text" name="nomeDisciplina" value="<?php $nomeDisciplina = new DisciplinasController; $nomeDisciplina->getDadosDisciplinas($_GET['idd'], 'nome') ?>"class="form-control" id="nomeCurso" placeholder="Digite o Nome da Disciplina">
                                    <input type="hidden" name="form" value="formEditDisciplina">
                                    <input type="hidden" name="idd" value="<?php echo $_GET['idd']; ?>">
                                </div>
                                <div class="form-group col-sm-7">
                                    <label for="inputState">Curso</label>
                                    <select name="idCurso" id="inputState" class="form-control">
                                        <?php   
                                            $nomeCurso = new CursoController;
                                            $nomeCurso->getNomesCurso();
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-7">
                                    <button type="submit" class="btn btn-primary toptop">Salvar Alterações</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </section>