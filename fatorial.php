<?php
$valor = 5;


//juciellen.cabrera@4linux.com.br


function fatorial($numero){
    $resultado = 1;
    for($contador=$numero; $contador >=1; $contador--){
        $resultado = $resultado * $contador;
    }
    return $resultado;   
}

$fatorial = fatorial($valor);
echo "O fatorial de $valor é $fatorial";