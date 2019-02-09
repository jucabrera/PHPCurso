<?php

$a = 1;
$b = &$a;
$a = 2;

var_dump($a,$b);

function adicionarSobrenome(&$nome){
    $nome .= ' Cabrera';    
}

$texto = 'Juciellen';
adicionarSobrenome($texto);
adicionarSobrenome('Daniel');
echo $texto;