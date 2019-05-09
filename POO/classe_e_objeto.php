<?php

class Casa{
    const TABELA = "tb_casa";
    const STATUS_VENDIDO = "VENDIDO";
    
    public $quartos;
    
    public function indicarNumeroDeQuartos($numero){
        $this->quartos = $numero;
    }
    
    public function verStatus(){
        if($this->status == self::STATUS_VENDIDO){
            
        }
    }
}

$statusVendido = Casa::STATUS_VENDIDO;

$casa = new Casa();
$casa->quartos = 3;

$casa2 = new Casa();
$casa2->indicarNumeroDeQuartos(4);

echo "<pre>";
var_dump($casa, $casa2);