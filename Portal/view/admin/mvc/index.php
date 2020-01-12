<?php
if(!isset($_GET['modulo'])){ echo '<pre>' . file_get_contents('leiame.txt') . '</pre>' ; die(); }

require 'controller.php';
require 'view.php';
require 'model/clientes.php';
require 'model/fornecedores.php';


$c = new Controller();
