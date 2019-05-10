<?php

abstract class Conta
{
    protected $saldo;
    public function depositar($valor){
        $this->saldo += $valor;
        return $this->saldo;
    }
    public abstract function aplicarJuros();
}

class ContaPoupanca extends Conta
{

    public function aplicarJuros()
    {
        echo "<BR>" . __METHOD__ . "<BR>";
    }
}

class ContaCorrente extends Conta
{

}


















