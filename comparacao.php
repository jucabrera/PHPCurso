<?php
$a = 1;
$b = '1';

echo "<h1>Comparação com == </h1>";
var_dump($a, $b, $a == $b);
echo "<h1>Comparação com === </h1>";
var_dump($a, $b, $a === $b);

$texto = "PHP";
echo "<br>";
if(strpos($texto,"P") === false){
    echo "não encontrei";
}else{    
    echo "encontrei";
}