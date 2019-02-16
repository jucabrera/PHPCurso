<?php

function autenticar($email,$nome)
{
    session_start();
    $_SESSION['email_usuario_logado'] = $email;
    $_SESSION['nome_usuario_logado'] = $nome;
    $now = new DateTime();
    $now->format('Y-m-d H:i:s');
    setcookie('ultimo_login',$now,time()+3600);
}

function verificarAutenticacao()
{    
    session_start();
    $nomeUsuarioLogado = ($_SESSION['nome_usuario_logado']) ?? '';
    if(!$nomeUsuarioLogado){
        header("Location: index.php");
    }
    return $nomeUsuarioLogado;    
}

function sair()
{
    session_start();
    session_destroy();
//     unset($_SESSION['email_usuario_logado']);
//     unset($_SESSION['nome_usuario_logado']);
    header("Location: index.php");
}

 