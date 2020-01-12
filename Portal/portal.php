<!DOCTYPE html>
<?php 
    include 'controller/usuarioController.php'; 
    include 'controller/cursosController.php';
    include 'controller/disciplinasController.php';
    include 'controller/matriculaController.php';
    include 'model/cursosModel.php';
    include 'model/disciplinasModel.php';
    include 'model/usuariosModel.php';
    include 'model/matriculaModel.php';

    if(!$_SESSION['logado']){
        echo "<script>window.location.href='index.php';</script>";
    }
?>
<html lang="pat-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Admin XPTO</title>

    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">    
    <link href="assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link href="assets/css/style.css" rel="stylesheet">    
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="assets/lib/bootstrap-fileupload/bootstrap-fileupload.css" />

    <!-- <link href="assets/lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
    <link href="assets/lib/advanced-datatable/css/demo_table.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="assets/lib/advanced-datatable/css/DT_bootstrap.css" />
  </head>

  <body>
    <section id="container">
        <?php include 'view/header.php'; ?>
        <?php include 'view/sideBar.php';?>


        <?php
            $link = $_GET['link'];

            $pag[1] = "view/pageHome.php";
            $pag[2] = "view/pageCursos.php";
            $pag[3] = "view/pageDisciplinas.php";
            $pag[4] = "view/pageUsuarios.php";
            $pag[5] = "view/pageNotas.php";
            $pag[6] = "view/pageConfig.php";
            $pag[7] = "view/pageCursosCadastrar.php";
            $pag[8] = "view/pageCursosEditar.php";
            $pag[9] = "view/pageDisciplinaCadastro.php";
            $pag[10] = "view/pageDisciplinaEditar.php";
            $pag[11] = "view/pageListaUsuarios.php";
            $pag[12] = "view/pageUsuarioCadastro.php";
            $pag[13] = "controller/cursosController.php";
            $pag[14] = "view/pageUsuarioEditar.php";
            $pag[15] = "view/pageMatricularAluno.php";
            
            if (!empty($link))
            {
                if (file_exists($pag[$link])) 
                {
                    include $pag[$link];
                }
                else
                {
                    include "view/pageHome.php";
                }
            }
            else
            {
                include "view/pageHome.php";
            }				
        ?>

        <?php include 'view/footer.php'; ?>
    </section>
    



    <script src="assets/lib/jquery/jquery.min.js"></script>
    <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/lib/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="assets/lib/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="assets/lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/lib/jquery.scrollTo.min.js"></script>
    <script src="assets/lib/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/lib/common-scripts.js"></script>
    
    <script type="text/javascript" language="javascript" src="assets/lib/advanced-datatable/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="assets/lib/advanced-datatable/js/DT_bootstrap.js"></script>

    <script src="assets/lib/advanced-form-components.js"></script>
    <script type="text/javascript" src="assets/lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>

    <script src="assets/js/portalMessage.js"></script>

    <script type="text/javascript">
        /* Formating function for row details */
        function fnFormatDetails(oTable, nTr) {
        var aData = oTable.fnGetData(nTr);
        var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
        sOut += '<tr><td>Rendering engine:</td><td>' + aData[1] + ' ' + aData[4] + '</td></tr>';
        sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
        sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
        sOut += '</table>';

        return sOut;
        }

        $(document).ready(function() {
        /*
        * Initialse DataTables, with no sorting on the 'details' column
        */
        var oTable = $('#hidden-table-info').dataTable({
            "aoColumnDefs": [{
            "bSortable": false,
            "aTargets": [0]
            }],
            "aaSorting": [
            [1, 'asc']
            ]
        });

        /* Add event listener for opening and closing details
        * Note that the indicator for showing which row is open is not controlled by DataTables,
        * rather it is done here
        */
        $('#hidden-table-info tbody td img').live('click', function() {
            var nTr = $(this).parents('tr')[0];
            if (oTable.fnIsOpen(nTr)) {
            /* This row is already open - close it */
            this.src = "assets/lib/advanced-datatable/media/images/details_open.png";
            oTable.fnClose(nTr);
            } else {
            /* Open this row */
            this.src = "assets/lib/advanced-datatable/images/details_close.png";
            oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
            }
        });
        });
    </script>    

    <?php
        if($_SESSION['success']){
            echo "<script>mostraDialogo('".$_SESSION['success']."', 'success', 5000)</script>";
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
