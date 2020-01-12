
    <section id="main-content">
        <section class="wrapper site-min-height">            
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="topoPage">
                        <div class="sombraTopoPage"></div>
                        <div class="onteudoTopoPage">
                            <h3>Página Cursos</h3>
                            <p>Conteúdo da Página de Cursos</p>
                            <?php if($_SESSION['nivelDeAcessoUsuario'] == '1'){ ?>
                                <a href="portal.php?link=7"><div class="addMais"><i class="fa fa-plus"></i></div></a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="conteudoCursos">                    
                        <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info" style="background-color:white;">
                            <thead>
                                <tr>
                                    <th>Nome do Curso</th>
                                    <th>Num. de Período(s)</th>
                                    <th>Turno(s)</th>
                                    <?php if($_SESSION['nivelDeAcessoUsuario'] == '1'){ ?>
                                        <th style="width:200px; text-align:center;">Ação</th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $curso = new CursoController;
                                    $curso->getCursos();
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </section>