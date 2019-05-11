<?php
function incluirArquivos($classe)
{
//     echo "<br>Classe: {$classe}<br>";
    require_once "{$classe}.php";
}

spl_autoload_register('incluirArquivos');