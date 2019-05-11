<?php

require 'autoload.php';

$totalProdutos = 100;

$taxaCorreio = 5;
$freteCorreio = new FreteCorreio($taxaCorreio);
$totalCorreio = $freteCorreio->calcularFrete($totalProdutos);

$taxaSedex = 20;
$freteSedex = new FreteSedex($taxaSedex);
$totalSedex = $freteSedex->calcularFrete($totalProdutos);

echo "Total Compra: {$totalProdutos}";
echo "<br>";
echo "Total Frete Correio: {$totalCorreio}";
echo "<br>";
echo "Total Frete Sedex: {$totalSedex}";

