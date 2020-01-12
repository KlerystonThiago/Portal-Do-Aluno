
    <section id="main-content">
        <section class="wrapper site-min-height">            
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="topoPage">
                        <div class="sombraTopoPage"></div>
                        <div class="onteudoTopoPage toptop2">
                            <h3>Cadastrar Disciplina</h3>                            
                        </div>
                    </div>
                    <div class="conteudoCursos pg">                    
                        <form name="formRegistro" action="controller/disciplinasController.php" method="POST">
                            <div class="row">
                                <div class="form-group col-sm-7">
                                    <label for="nomeCurso">Nome da Disciplina</label>
                                    <input type="text" name="nomeDisciplina" class="form-control" id="nomeCurso" placeholder="Digite o Nome da Disciplina" required>
                                    <input type="hidden" name="form" value="formCadDisciplina">
                                </div>
                                <div class="form-group col-sm-7">
                                    <label for="inputState">Curso</label>
                                    <select name="cursoDisciplina" id="inputState" class="form-control">
                                        <?php
                                            $nomeCurso = new CursoController;
                                            $nomeCurso->getNomesCurso();
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-7">
                                    <button type="submit" class="btn btn-primary toptop">Cadastrar Curso</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </section>