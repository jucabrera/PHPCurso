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

final class ContaPoupanca extends Conta
{
 
}

class ContaCorrente extends ContaPoupanca{
    
}

$contaPoupanca = new ContaPoupanca();





