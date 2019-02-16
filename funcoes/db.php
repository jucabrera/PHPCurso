<?php

function conectar()
{
    $configDb = require 'config/db.config.local.php';
    $conexao = pg_connect("host={$configDb['host']} port={$configDb['port']} dbname={$configDb['database']} user={$configDb['user']} password={$configDb['password']}");
    return $conexao;
}

function inserirUsuario($nome, $email, $senha)
{
    $conexao = conectar();
    $insert = "INSERT INTO usuarios (nome, email, senha)  
        VALUES ('$nome', '$email', '$senha')";
    
    $retorno = pg_exec($conexao, $insert);
    if($retorno === false){
        echo "<h1>Erro ao inserir usuário</h1>";
    }else{
        echo "<h1>Usuário inserido com sucesso</h1>";
    }
}

function listarUsuarios()
{
    $conexao = conectar();
    $sql = "SELECT * FROM usuarios ORDER BY nome";
    $query = pg_query($conexao,$sql);
    $usuarios = pg_fetch_all($query);
    return $usuarios;
}























// inserirUsuario('José', 'jose@4linux.com.br', '111');