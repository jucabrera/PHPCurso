<?php

class Quadrado
{
    public static $valor;
    
    public static function calcular(){
        return pow(self::$valor, 2);
    }
    
}

$numero = Quadrado::$valor = 2;
$valorQuadrado = Quadrado::calcular();
echo "O quadrado de {$numero} é {$valorQuadrado}";