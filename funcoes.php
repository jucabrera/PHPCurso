<?php

$nome = 'Juciellen';

function exibirNomeSemParametro(){
//     global $nome;
    $nome = $GLOBALS['nome'].' Cabrera';
    echo "<h1>$nome</h1>";
}

exibirNomeSemParametro();
echo $nome;

function exibirNome($texto){
    echo "<h1>$texto</h1>";
}

function soma($a,$b){
    $resultado = $a+$b;
    echo "$a + $b = $resultado";
}

function calcularTotal($preco, $quantidade=1){
    $resultado = $preco * $quantidade;
    echo "$preco * $quantidade = $resultado";
    return $resultado;
//     echo "fhdshvjksdfhkaskjfhdkjdhgjdshg";
}

function parOuImpar($numero)
{
    if ($numero % 2 == 0) {
        echo "$numero é par";
        return;
    }
    echo "$numero é ímpar";
    return;
}

// parOuImpar(2);
// $total = calcularTotal(5);
// echo "<br>";
// var_dump($total);
// echo "<br>";
// echo $total;

exibirNome('Maria');
exibirNome($nome);
soma(2,3);
echo "<br>";
soma(6,8);
echo "<br>";
calcularTotal(2,2);
echo "<br>";









