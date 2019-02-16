<?php
require_once "view/menu.phtml";
require "funcoes/funcoes-form.php";
require_once 'funcoes/db.php';
// require 'funcoes/funcoes_usuario.php';

$valido = false;
if($_POST){    
    filtrarCampos();
    $valido = validarCampos();    
}

if($valido){
    $email = $_POST['email'];
    $usuario = buscarUsuarioPorEmail($email);
    
    if(!$usuario){
        $mensagem = 'Usuário não cadastrado';
        exibirErro($mensagem);
    }else{
        $senha = $_POST['senha'];
        $senhaSalva = $usuario['senha'];
        
        if($senha != $senhaSalva){
            $mensagem = 'Dados inválidos.';
            exibirErro($mensagem);
        }else{
            $nome = $usuario['nome'];
            autenticar($email, $nome);
            header("Location: lista_usuarios.php");
        }
    }
}

require 'view/login.phtml';
?>
