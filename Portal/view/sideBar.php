    <?php session_start(); ?>
    <aside>
        <div id="sidebar" class="nav-collapse ">
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered"><a href="profile.html"><img src="assets/img/<?php echo $usuario->getImgUser(); ?>" class="img-circle" width="80"></a></p>
            <h5 class="centered">Kleryston Thiago</h5>
            <h6 class="centered" style="margin-bottom:-25px; border-bottom:1px solid #444; padding-bottom:15px;"><?php echo $usuario->getNivelAcesso(); ?></h6>
            <li class="mt">
            <a href="portal.php?link=1">
                <i class="fa fa-home"></i>
                <span>Início</span>
                </a>
            </li>
            <li class="sub-menu">
            <a href="portal.php?link=2">
                <i class="fa fa-desktop"></i>
                <span>Cursos</span>
            </a>              
            </li>
            <li class="sub-menu" style="<?php if($_SESSION['nivelDeAcessoUsuario'] == '3'){echo "display:none;";} ?>">
                <a href="portal.php?link=3">
                    <i class="fa fa-cogs"></i>
                    <span>Disciplinas</span>
                </a>
            </li>
            <li class="sub-menu" style="<?php if($_SESSION['nivelDeAcessoUsuario'] == '3' || $_SESSION['nivelDeAcessoUsuario'] == '2'){echo "display:none;";} ?>">
                <a class="" href="portal.php?link=4">
                    <i class="fa fa-book"></i>
                    <span>Usuários</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="portal.php?link=5">
                    <i class="fa fa-tasks"></i>
                    <span>Notas</span>
                </a>              
            </li>
            <li class="sub-menu">
                <a href="portal.php?link=6">
                    <i class="fa fa-tasks"></i>
                    <span>Configurações</span>
                </a>              
            </li>
        </ul>
        </div>
    </aside>