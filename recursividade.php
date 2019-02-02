<?php
$numero = 4;
// $resultado = 1;
// for($contador=$numero; $contador >=1; $contador--){
//     $resultado = $resultado * $contador;
// }

// echo "O fatorial de $numero é $resultado";


function fatorial($numero){
   
    if($numero > 0){
        echo "<br>";
        echo __FUNCTION__.$numero;
        return $numero * fatorial(--$numero) ;
    }
    
}
echo "<br><br>";
echo fatorial($numero);
//juciellen.cabrera@4linux.com.br
