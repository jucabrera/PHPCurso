<?php
require_once "bootstrap.html";
require "funcoes/funcoes-form.php";
require_once 'funcoes/db.php';

define('NOME_APLICACAO','Turma-500');

$nome = '';
$email = '';

if ($_POST) {

    filtrarCampos();    
    
    $nome = ($_POST['nome']) ?? '';
    $email = ($_POST['email']) ?? '';
    $senha = ($_POST['senha']) ?? '';    
    
    if(validarCampos() and validarSenha() and validarArquivoEnviado()){
        inserirUsuario($nome, $email, $senha);
    }
    

}

require "view/formulario-cadastro.phtml";
?>



