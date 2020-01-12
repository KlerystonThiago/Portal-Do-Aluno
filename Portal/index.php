<!DOCTYPE html>
<?php session_start(); ?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/portal.css">
        <title>Document</title>
        <script>
            function validarSenhas2(){
                alert('é igual a um a senha');
                return true;
            }
        </script>
    </head>
    <body>                
        <div class="container-fluid cfh">
            <div class="row caixaBanner">
                <div class="col-6 bannerPainel">
                    <div class="sombra"></div>
                    <div class="tituloBannerSvg"></div>
                </div>
                <div class="col-6">
                    <div class="row logo"></div>
                    <div class="row">
                        <div class="col-10 offset-1">
                            <div class="card mt-3 tab-card">
                            <div class="card-header tab-card-header">
                                <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">Registre-se</a>
                                    </li>
                                </ul>
                            </div>
                    
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
                                    <h5 class="card-title tLogin">Login</h5>
                                    <form action="controller/usuarioController.php" method="POST">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">E-Mail</label>
                                            <input type="email" name="email" value="klerystonadmin@mail.com" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-Mail de Acesso">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Senha</label>
                                            <input type="password" value="admin" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Senha de Acesso">
                                            <input type="hidden" name="form" value="formLogin">
                                        </div> 
                                        <button type="submit" class="col-6 btn btn-primary centerBtnLogin">Fazer Login</button>
                                    </form>
                                </div>  

                                <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
                                    <h5 class="card-title tLogin">Cadastre-se</h5>
                                    <form name="formRegistro" action="controller/usuarioController.php" method="POST">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="nome">Nome</label>
                                                    <input type="text" name="nomeUsuario" class="form-control" id="nome" placeholder="Digite Seu Nome" required>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="sobrenome">Sobrenome</label>
                                                    <input type="text" name="sobreNome" class="form-control" id="sobrenome" placeholder="Digite Seu Sobrenome" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1r">E-Mail</label>
                                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1r" aria-describedby="emailHelp" placeholder="Digite um E-Mail Válido" required>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1r">Senha</label>
                                                    <input type="password" name="senha" class="form-control" id="exampleInputPassword1r nomes" placeholder="Digite Uma Senha" required>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1r2">Repetir Senha</label>
                                                    <input type="password" name="senha2" class="form-control" id="exampleInputPassword1r2" placeholder="Repita Senha" required>
                                                    <input type="hidden" name="form" value="formCadAluno">
                                                    <input type="hidden" name="nivelDeAcesso" value="3">
                                                </div>
                                            </div>

                                        </div>
                                        <button type="submit" onClick="return validarSenhas()" class="col-6 btn btn-primary centerBtnLogin">Cadastrar</button>
                                    </form>                                    
                                </div>
                    
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="assets/js/portalMessage.js"></script>

        <?php
            if($_SESSION['success']){
                echo "<script>mostraDialogo('Usuário Cadastrado Com Sucesso', 'success', 5000)</script>";
            }
            if($_SESSION['error']){
                echo "<script>mostraDialogo('".$_SESSION['error']."', 'danger', 5000)</script>";
            }
            
            unset(
                $_SESSION['success'],
                $_SESSION['error']
            )
        ?>
    </body>
</html>