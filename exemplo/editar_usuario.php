<?php
require 'view/menu.phtml';
require 'funcoes/db.php';
require 'funcoes/funcoes-form.php';

if ($_POST) {
    filtrarCampos();
    $id = $_POST['id'];
    $nome = ($_POST['nome']) ?? '';
    $email = ($_POST['email']) ?? '';
    $senha = ($_POST['senha']) ?? '';
    //     and validarArquivoEnviado()
    if(validarCampos() and validarSenha() ){
        if(alterarUsuario($id, $nome, $email, $senha)){
            echo "<h1>Usuario $nome alterado com sucesso</h1>";
            echo "<a href='lista_usuarios.php'>Listar usuarios</a>";
        }
    }
}else{

    $id = (int) $_GET['id'];
    $usuario = buscarUsuario($id);
    if (! $usuario) {
        exibirErro('Usuario não encontrado');
    } else {    
        $nome = $usuario['nome'];
        $email = $usuario['email'];
        $action = 'editar_usuario.php';
        require 'view/formulario-cadastro.phtml';
    }
}