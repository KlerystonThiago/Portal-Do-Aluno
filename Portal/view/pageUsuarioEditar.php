
    <?php
        $user = new Usuario;
    ?>
    <section id="main-content">
        <section class="wrapper site-min-height">            
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="topoPage">
                        <div class="sombraTopoPage"></div>
                        <div class="onteudoTopoPage toptop2">
                            <h3>Editar Usuários</h3>
                        </div>
                    </div>
                    <div class="conteudoCursos pg">                    
                        <form name="formRegistro" action="controller/usuarioController.php" method="POST">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label for="nomeCurso">Nome de Usuário</label>
                                            <input type="text" value="<?php echo $user->getDadosUsuario($_GET['id'], 'nome'); ?>" name="nomeUsuario" class="form-control" id="nomeCurso" placeholder="Digite o Nome do Usuário" required>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="nomeCurso">Sobrenome de Usuário</label>
                                            <input type="text" value="<?php echo $user->getDadosUsuario($_GET['id'], 'sobreNome'); ?>" name="sobreNomeUsuario" class="form-control" id="nomeCurso" placeholder="Digite o Sobrenome do Usuário" required>
                                        </div>
                                        <div class="form-group col-sm-12 offset-sm-4">
                                            <label for="periodos">E-Mail de Usuário (Login)</label>
                                            <input type="email" value="<?php echo $user->getDadosUsuario($_GET['id'], 'email'); ?>" name="emailUsuario" class="form-control" id="periodos" placeholder="Digite o E-Mail do Usuário" required>
                                        </div>                                        
                                        <div class="form-group col-sm-12">
                                            <label for="inputState">Tipo de Usuário</label>
                                            <select name="nivelDeAcesso" id="inputState" class="form-control">
                                                <option value="0">Selecione o Tipo de Usuário</option>
                                                <option value="1" <?php if($user->getDadosUsuario($_GET['id'], 'nivelDeAcesso') == 1){echo "selected";} ?>>Admin</option>
                                                <option value="2" <?php if($user->getDadosUsuario($_GET['id'], 'nivelDeAcesso') == 2){echo "selected";} ?>>Professor</option>
                                                <option value="3" <?php if($user->getDadosUsuario($_GET['id'], 'nivelDeAcesso') == 3){echo "selected";} ?>>Aluno</option>
                                            </select>
                                            <input type="hidden" name="form" value="formEditUsuario">
                                            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                                        </div>                                        
                                        <div class="form-group col-sm-8">
                                            <button onClick="return validarSenhasCadUsuario()" type="submit" class="btn btn-primary toptop">Salvar Alterações</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>                
    </section>
    <script type="text/javascript">
        function validarSenhasCadUsuario(){
            var senha = formRegistro.senhaUsuario.value;
            var senha2 = formRegistro.repetirSenhaUsuario.value;
            var tipoUser = formRegistro.nivelDeAcesso.value;

            if(senha != senha2){
                if(tipoUser == 0){
                    mostraDialogo('Selecion um Tipo de Usuário', 'danger', 5000)
                    return false;
                }
                else{
                    mostraDialogo('Às Senhas Não São Iguais', 'danger', 5000)
                    return false;
                    formRegistro.senha.focus();  
                }                                      
            }
        }
    </script>