<?php 

abstract class Frete implements FreteInterface
{
   protected $taxa;
   
   public function __construct($taxa){
       $this->definirTaxa($taxa);
   }
   
   protected function definirTaxa($taxa){
       $this->taxa = $taxa;
   }
   
   public abstract function calcularFrete($valor);
}