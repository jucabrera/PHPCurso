<?php

require 'view/menu.phtml';
require 'funcoes/db.php';
$usuarios = listarUsuarios();
require 'view/lista-usuarios.phtml';
?>
