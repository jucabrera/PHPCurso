<?php
$alunos = [
    [
        'id' => 1,
        'nome' => 'Ricardo'
    ],
    [
        'id' => 2,
        'nome' => 'Wesley'
    ]
];

$alunos[] = ['id'=>3,'nome'=>'Felipe'];
$alunos[3] = ['id'=>4,'nome'=>'Rafael'];

foreach ($alunos as $aluno){
    echo "<h5>{$aluno['id']} - {$aluno['nome']}";
}

echo "<pre>";
print_r($alunos);