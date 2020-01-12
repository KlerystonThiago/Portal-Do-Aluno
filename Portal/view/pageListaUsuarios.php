
    <section id="main-content">
        <section class="wrapper site-min-height">            
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="topoPage">
                        <div class="sombraTopoPage"></div>
                        <div class="onteudoTopoPage">
                            <h3><?php echo $_GET['user']; ?></h3>
                            <p>Gerenciamento de <?php echo $_GET['user']; ?></p>
                            <a href="portal.php?link=12&user=<?php echo $_GET['user']; ?>&acao=cad"><div class="addMais"><i class="fa fa-plus"></i></div></a>
                        </div>
                    </div>
                    <div class="conteudoCursos">                    
                        <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info" style="background-color:white;">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>E-Mail</th>
                                    <th style="width:300px; text-align:center;">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $usuarios = new Usuario;
                                    $usuarios->getUsuarios();
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </section>