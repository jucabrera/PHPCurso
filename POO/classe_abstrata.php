<?php

abstract class Conta
{
    protected $saldo;

    public function sacar($valor)
    {
        if ($valor > $this->saldo) {
            return false;
        }

        $this->saldo -= $valor;
        return $this->saldo;
    }

    public function depositar($valor){
        $this->saldo += $valor;
        return $this->saldo;
    }
}

class ContaPoupanca extends Conta
{
 
}

// $conta = new Conta();
$contaPoupanca = new ContaPoupanca();
var_dump($contaPoupanca);



