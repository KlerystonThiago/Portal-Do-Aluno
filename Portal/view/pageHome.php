
    <section id="main-content">
        <section class="wrapper site-min-height">            
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="topoPage">
                        <div class="sombraTopoPage"></div>
                        <div class="onteudoTopoPage">
                            <h3>Bem Vindo <?php echo $_SESSION['nomeUsuario']; ?></h3>
                            <p>
                                <?php
                                    if($_SESSION['nivelDeAcessoUsuario'] == 1){
                                        echo "Painel Administrativo";
                                    }
                                    else if($_SESSION['nivelDeAcessoUsuario'] == 2){
                                        echo "Painel Administrativo";
                                    }
                                    else{
                                        echo "Bons Estudos Para Você";
                                    }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>