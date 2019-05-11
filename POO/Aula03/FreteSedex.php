<?php


class FreteSedex extends Frete
{
    const PERCENTUAL_VALOR = 10;
    
    public function calcularFrete($valor){
        $valor = ($valor * self::PERCENTUAL_VALOR) / 100;
        $frete = $valor + $this->taxa;
        return $frete;
    }
    
}