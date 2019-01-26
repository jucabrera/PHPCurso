<?php

echo "<h1>While</h1>";
$contador = 11;
while($contador <=10){
    echo $contador;
    $contador++;
}

echo "<h1>For</h1>";
for($contador=11; $contador <=10 ; $contador++){
    echo $contador;
}

echo "<h1>Do while</h1>";

$contador = 11;
do {
    echo $contador;
    $contador++;
}while($contador <=10);
