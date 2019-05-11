<?php

class FreteCorreio extends Frete
{
    public function calcularFrete($valor){
        $frete = $valor + $this->taxa;
        return $frete;
    }
}