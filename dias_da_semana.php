<?php
//http://localhost:8080/dias_da_semana.php?dia=1
$numero_dia_da_semana = (int) $_GET['dia'];

if($numero_dia_da_semana == 1){
    echo "Domingo";
}else if($numero_dia_da_semana == 2){
    echo "Segunda-feira";
}else if($numero_dia_da_semana == 3){
    echo "Terça-feira";
}else if($numero_dia_da_semana == 4){
    echo "Quarta-feira";
}else if($numero_dia_da_semana == 5){
    echo "Quinta-feira";
}else if($numero_dia_da_semana == 6){
    echo "Sexta-feira";
}else if($numero_dia_da_semana == 7){
    echo "Sábado";
}else{
    echo "Valor inválido";
}