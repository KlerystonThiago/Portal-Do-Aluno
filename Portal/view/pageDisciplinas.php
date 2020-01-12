    
    <section id="main-content">
        <section class="wrapper site-min-height">            
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="topoPage">
                        <div class="sombraTopoPage"></div>
                        <div class="onteudoTopoPage">
                            <h3>Página de Disciplinas</h3>
                            <p>Conteúdo da Página de Disciplina</p>
                            <?php if($_SESSION['nivelDeAcessoUsuario'] == '1'){ ?>
                                <a href="portal.php?link=9"><div class="addMais"><i class="fa fa-plus"></i></div></a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="conteudoCursos">                    
                        <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info" style="background-color:white;">
                            <thead>
                                <tr>
                                    <th>Nome da Disciplina</th>
                                    <?php if($_SESSION['nivelDeAcessoUsuario'] == '1'){ ?>
                                        <th style="width:200px; text-align:center;">Ação</th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $dis = new DisciplinasController;
                                    $dis->getDisciplinas();
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </section>