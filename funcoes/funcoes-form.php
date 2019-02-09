<?php

function exibirErro($mensagem)
{
    echo "<div class=\"alert alert-danger\" role=\"alert\">
    $mensagem
    </div>";
}

function filtrarCampos()
{
    $_POST = array_map('trim', $_POST);
    $_POST = array_map('strip_tags', $_POST);

}

function validarArquivoEnviado()
{
//     echo __FUNCTION__;
    $foto = $_FILES['foto'];
    
    if ($_FILES['foto']['error'] == UPLOAD_ERR_NO_FILE) {
        $mensagem = "Foto é um campo obrigatório";
        exibirErro($mensagem);
        return false;
    }
    return true;
}

function validarSenha()
{
    $senha = ($_POST['senha']) ?? '';
    $senhaConfirmacao = ($_POST['senha-confirmacao']) ?? '';
    
    if ($senha != $senhaConfirmacao) {
        $mensagem = "Senhas são incompatíveis<br>";
        exibirErro($mensagem);
        return false;
    }
    
    return true;
}

function validarCampos()
{
    $campos = array_keys($_POST);
    $valido = true;
    foreach ($campos as $campo) {
        if (empty($_POST[$campo])) {
            $mensagem = "$campo é um campo obrigatório";
            exibirErro($mensagem);
            $valido = false;
        }
    }
    
    return $valido;
}


