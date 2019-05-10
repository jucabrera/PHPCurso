<?php

interface ContaInterface{
    public function depositar($valor);
    public function sacar(float $valor):float;
}

abstract class Conta implements ContaInterface{
    public function sacar(float $valor) :float
    {
        if ($valor > $this->saldo) {
            return false;
        }
    
        //$this->saldo = $this->saldo - $valor;
        $this->saldo -= $valor;
        return $this->saldo;
    }
    
    public abstract function depositar($valor);
}