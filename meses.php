<?php

$meses = array('Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez');

// foreach ($meses as $mes){
//     echo "<h5>$mes</h5>";
// }
for($m=0; $m< count($meses); $m++){
    echo "<h5>{$meses[$m]}</h5>";
}