<?php

class Model
{
    protected $aluno;
    protected $bancoDeDados;
    
    public function __construct($aluno, $bancoDeDados){
        $this->aluno = $aluno;
        $this->bancoDeDados = $bancoDeDados;
    }
    
    public function salvarAluno()
    {
        //salvar aluno
        $this->bancoDeDados->inserir($this->aluno);
    }
}

$model = new Model('Juciellen', 'Mysql');
var_dump($model);