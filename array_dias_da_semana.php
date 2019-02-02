<?php
echo "<pre>";
$dias = [
    'domingo',
    'segunda',
    'terça',
    'quarta',
    'quinta',
    'sexta'
];
$dias[] = 'sábado';
foreach ($dias as $dia) {
    echo "$dia<br>";
}

foreach ($dias as $chave => $dia) {       
        echo "$chave -> $dia<br>";    
}

// echo count($dias);
// print_r($dias);
// echo "<br>";
// var_dump($dias);
//echo $dias[6];
// echo "</pre>";

