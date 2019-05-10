<?php

abstract class Conta
{
    protected $saldo;

    public function sacar($valor)
    {
        if ($valor > $this->saldo) {
            return false;
        }        
        //$this->saldo = $this->saldo - $valor;
        $this->saldo -= $valor;
        return $this->saldo;
    }
    
    public final function depositar($valor){
        $this->saldo += $valor;
        return $this->saldo;
    }
}

class ContaPoupanca extends Conta
{    
   public function depositar($valor){
       
   }
}




















