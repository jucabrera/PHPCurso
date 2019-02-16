<?php 
require_once 'funcoes/db.php';

$id = (int) $_GET['id'];
if(excluirUsuario($id) === false){
    echo "Não foi possivel excluir usuario $id";
}
header("Location: lista_usuarios.php");
