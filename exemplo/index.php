<?php 
session_start();

require_once "view/bootstrap.html";
echo "<h3>Exemplo Curso500 - PHP</h3>";

echo "<a href=\"formulario_cadastro.php\">Cadastro</a><br>";

require 'view/login.phtml';

?>
