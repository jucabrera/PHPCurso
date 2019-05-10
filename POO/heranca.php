<?php

class Conta
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
    
    public function depositar($valor){
        $this->saldo += $valor;
        return $this->saldo;
    }
}

class ContaPoupanca extends Conta
{    
    const TAXA_JUROS = 0.0037;
    public function aplicarJuros(){
        echo "<BR>".__METHOD__."<BR>";
        $this->saldo += $this->saldo * static::TAXA_JUROS;
        echo "<BR>Taxa de juros: ".static::TAXA_JUROS;
        echo "<BR>";
        return $this->saldo;
    }
}

class ContaCorrente extends ContaPoupanca{
    const TAXA_JUROS = 0.002;
//     public function aplicarJuros(){
// //         parent::aplicarJuros();
//         echo "<BR>".__METHOD__."<BR>";
//         $this->saldo += $this->saldo * self::TAXA_JUROS;
//         return $this->saldo;
//     }
}

$conta = new Conta();
echo "Saldo atual: {$conta->depositar(100)}";
echo "<br>";
echo "Saldo atual: {$conta->sacar(50)}";
echo "<br>";

$poupanca = new ContaPoupanca();
echo "Saldo poupança: {$poupanca->depositar(500)}";
echo "<br>";
echo "Taxa de juros = ". ContaPoupanca::TAXA_JUROS;
echo "<br>";
echo "Saldo após aplicar taxa: ".$poupanca->aplicarJuros();
echo "<br>";

$corrente = new ContaCorrente();
echo "<br>";
echo "Saldo conta corrente: {$corrente->depositar(500)}";
echo "<br>";
echo "Saldo após aplicar taxa: ".$corrente->aplicarJuros();
echo "<br>";
echo "<pre>";

var_dump($poupanca);

















