<?php

$funcao = function ($texto){echo "<h1>$texto</h1>";};
// var_dump($funcao);

$fatorial = function ($numero){
    $resultado = 1;
    for($contador=$numero; $contador >=1; $contador--){
        $resultado = $resultado * $contador;
    }
    return $resultado;   
};
function fatorial ($numero){
    $resultado = 1;
    for($contador=$numero; $contador >=1; $contador--){
        $resultado = $resultado * $contador;
    }
    return $resultado;
}

$numeros = [1,2,3,4,5];

$fatoriais = array_map($fatorial, $numeros);
print_r($fatoriais);

$fatoriais = array_map('fatorial', $numeros);
print_r($fatoriais);

echo "<br>".$fatorial(6);







