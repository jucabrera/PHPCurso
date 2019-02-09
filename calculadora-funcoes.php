<form action="calculadora-funcoes.php" method="post">
	Numero 1:<input type="text" name="num1"><br>
	Numero 2:<input type="text" name="num2"><br>
	Operação:
	<select name="operador">
		<option value='+'>+
		<option value='-'>-
		<option value='*'>*
		<option value='/'>/
	</select>
	<input type="submit" value="calcular">
</form>
<?php

$num1 = ($_POST['num1']) ?? null;
$num2 = ($_POST['num2']) ?? null;
$operacao = ($_POST['operador']) ?? null;
$resultado = calculadora($operacao, $num1, $num2);


function calculadora($operacao, $num1, $num2)
{
    if($operacao == '+'){
        return soma($num1,$num2);
    }
    if($operacao == '-'){
        return subtracao($num1, $num2);   
    }
    if($operacao == '/'){
       return divisao($num1, $num2);
    }
    if($operacao == '*'){
        return multiplicacao($num1, $num2);
    }
}

function soma($a,$b){
    $resultado = $a + $b;
    return $resultado;
}

function subtracao($a,$b){
    $resultado = $a - $b;
    return $resultado;
}
function multiplicacao($a,$b){
    $resultado = $a * $b;
    return $resultado;
}

function divisao($a,$b){
    
    if($a == 0 or $b == 0){
        return 'Não existe divisão por 0';
    }
    $resultado = $a / $b;
    return $resultado;
    
}


if($_POST):
?>
<h1>Resultado operacao <?=$operacao?> <?=$resultado?></h1>
<?php 
endif;
?>












