    
    <section id="main-content">
        <section class="wrapper site-min-height">            
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="topoPage">
                        <div class="sombraTopoPage"></div>
                        <div class="onteudoTopoPage toptop2">
                            <h3>Editar Curso</h3>                            
                        </div>
                    </div>
                    <div class="conteudoCursos pg">                    
                        <form name="formRegistro" action="controller/cursosController.php" method="POST">
                            <div class="row">
                                <div class="form-group col-sm-7">
                                    <label for="nomeCurso">Nome do Curso</label>
                                    <input type="text" value="<?php $curso = new CursoController; echo $curso->getDadosCurso($_GET['id'], 'nomeDoCurso');?>" name="nomeDoCurso" class="form-control" id="nomeCurso" placeholder="Digite o Nome do Curso" required>
                                </div>
                                <div class="form-group col-sm-7">
                                    <label for="periodos">Número de Periodos</label>
                                    <input type="text"  value="<?php echo $curso->getDadosCurso($_GET['id'], 'numDePeriodos');?>" name="numDePeriodos" class="form-control" id="periodos" placeholder="Digite o Número de Períodos" required>
                                    <input type="hidden" name="form" value="formEditCurso">
                                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                                </div>
                                <div class="form-group col-sm-7">
                                    <label for="inputState">Turno</label>
                                    <select name="turno" id="inputState" class="form-control" required>
                                        <option value="todos">Selecione Um Turno</option>
                                        <option value="manha"<?php if($curso->getDadosCurso($_GET['id'], 'turno') == 'manha'){echo "selected";}?>>Manhã</option>
                                        <option value="tarde"<?php if($curso->getDadosCurso($_GET['id'], 'turno') == 'tarde'){echo "selected";}?>>Tarde</option>
                                        <option value="noite"<?php if($curso->getDadosCurso($_GET['id'], 'turno') == 'noite'){echo "selected";}?>>Noite</option>
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