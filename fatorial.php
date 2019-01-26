<?php
$numero = 4;
$resultado = 1;
for($contador=$numero; $contador >=1; $contador--){
    $resultado = $resultado * $contador;
}

echo "O fatorial de $numero é $resultado";
