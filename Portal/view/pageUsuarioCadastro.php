
    <section id="main-content">
        <section class="wrapper site-min-height">            
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="topoPage">
                        <div class="sombraTopoPage"></div>
                        <div class="onteudoTopoPage toptop2">
                            <h3>Cadastrar Usuários</h3>
                        </div>
                    </div>
                    <div class="conteudoCursos pg">                    
                        <form name="formRegistro" action="controller/usuarioController.php" method="POST">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label for="nomeCurso">Nome de Usuário</label>
                                            <input type="text" name="nomeUsuario" class="form-control" id="nomeCurso" placeholder="Digite o Nome do Usuário" required>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="nomeCurso">Sobrenome de Usuário</label>
                                            <input type="text" name="sobreNomeUsuario" class="form-control" id="nomeCurso" placeholder="Digite o Sobrenome do Usuário" required>
                                        </div>
                                        <div class="form-group col-sm-12 offset-sm-4">
                                            <label for="periodos">E-Mail de Usuário (Login)</label>
                                            <input type="email" name="emailUsuario" class="form-control" id="periodos" placeholder="Digite o E-Mail do Usuário" required>
                                        </div>                                        
                                        <div class="form-group col-sm-12">
                                            <label for="inputState">Tipo de Usuário</label>
                                            <select name="nivelDeAcesso" id="inputState" class="form-control">
                                                <option value="0">Selecione o Tipo de Usuário</option>
                                                <option value="1">Admin</option>
                                                <option value="2">Professor</option>
                                                <option value="3">Aluno</option>
                                            </select>
                                            <input type="hidden" name="form" value="formCadUsuario">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="nomeCurso">Senha</label>
                                            <input type="password" name="senhaUsuario" class="form-control" id="nomeCurso" placeholder="Digite Uma Senha" required>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="periodos">Repetir Senha</label>
                                            <input type="password" name="repetirSenhaUsuario" class="form-control" id="periodos" placeholder="Digite a Senha Novamente" required>
                                        </div>
                                        <div class="form-group col-sm-8">
                                            <button onClick="return validarSenhasCadUsuario()" type="submit" class="btn btn-primary toptop">Cadastrar Usuário</button>
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