<?php
require_once "bootstrap.html";
require "funcoes/funcoes-form.php";

$nome = '';
$email = '';

if ($_POST) {

    filtrarCampos();
    validarCampos();
    
    $nome = ($_POST['nome']) ?? '';
    $email = ($_POST['email']) ??;
    $senha = ($_POST['senha']) ?? '';
    $senhaConfirmacao = ($_POST['senha-confirmacao']) ?? '';
        
    validarSenha();
    validarArquivoEnviado();

}

require "view/formulario-cadastro.html";
?>


