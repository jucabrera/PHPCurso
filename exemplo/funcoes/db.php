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

function excluirUsuario($id)
{    
    $conexao = conectar();
    $sql = "DELETE FROM usuarios WHERE id = $id";
    return pg_exec($conexao, $sql);
}

function buscarUsuario($id)
{
    $conexao = conectar();
    $sql = "SELECT * FROM usuarios WHERE id = $id";
    $result = pg_query($conexao,$sql);
    $usuario = pg_fetch_assoc($result);
    return $usuario;
}

function buscarUsuarioPorEmail($email){
    $conexao = conectar();
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = pg_query($conexao,$sql);
    $usuario = pg_fetch_assoc($result);
    return $usuario;
}

function alterarUsuario($id, $nome, $email, $senha){
    
    $conexao = conectar();
    $sql = "
        UPDATE usuarios 
        SET nome = '$nome', email = '$email', senha='senha'
        WHERE 
            id = $id
    ";
    return pg_exec($conexao, $sql);
}






















// inserirUsuario('José', 'jose@4linux.com.br', '111');