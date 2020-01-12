
    <section id="main-content">
        <section class="wrapper site-min-height">            
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="topoPage">
                        <div class="sombraTopoPage"></div>
                        <div class="onteudoTopoPage toptop2">
                            <h3>Cadastrar Curso</h3>                            
                        </div>
                    </div>
                    <div class="conteudoCursos pg">                    
                        <form name="formRegistro" action="controller/cursosController.php" method="POST">
                            <div class="row">
                                <div class="form-group col-sm-7">
                                    <label for="nomeCurso">Nome do Curso</label>
                                    <input type="text" name="nomeDoCurso" class="form-control" id="nomeCurso" placeholder="Digite o Nome do Curso" required>
                                </div>
                                <div class="form-group col-sm-7">
                                    <label for="periodos">Número de Periodos</label>
                                    <input type="text" name="numDePeriodos" class="form-control" id="periodos" placeholder="Digite o Número de Períodos" required>
                                    <input type="hidden" name="form" value="formCadCurso">
                                </div>
                                <div class="form-group col-sm-7">
                                    <label for="inputState">Turno</label>
                                    <select name="turno" id="inputState" class="form-control" required>
                                        <option value="todos">Selecione Um Turno</option>
                                        <option value="manha">Manhã</option>
                                        <option value="tarde">Tarde</option>
                                        <option value="noite">Noite</option>
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