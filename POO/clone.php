<?php
class Casa{
    public $quartos;
    
    public function __construct(){
        echo __METHOD__;
        echo "<br>";
    }
    
    public function __clone()
    {
        echo __METHOD__;
        echo "<br>";
    }
}

$casa1 = new Casa();
$casa1->quartos = 3;

$casa2 = new Casa();
$casa2->quartos = 5;

$casa2 = clone $casa1;
$casa1->quartos = 2;

var_dump($casa1, $casa2);