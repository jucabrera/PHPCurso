<?php

$numero = 1;
while($numero <=10){
    
    echo "<h1> Tabuada do $numero</h1>";
    
    for($count = 0; $count <=10; $count++){
        $resultado = $numero * $count;
        echo "<h2>{$numero} * {$count} = {$resultado}</h2>";
    }
    
    $numero++;
}