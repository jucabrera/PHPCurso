<form action="calculadora.php" method="post">
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
print_r($_POST);

// if(isset($_POST['num1'])){
//     $num1 = $_POST['num1'];
// }else{
//     $num1 = null;
// }
// $num1 = (isset($_POST['num1'])) ? $_POST['num1'] : null;
$num1 = ($_POST['num1']) ?? null;
$num2 = ($_POST['num2']) ?? null;
$operacao = ($_POST['operador']) ?? null;
$resultado = null;


if($operacao == '+'){
    $resultado = $num1 + $num2;
}elseif($operacao == '-'){
    $resultado = $num1 - $num2;    
}elseif($operacao == '/'){
    $resultado = $num1 / $num2;
}elseif($operacao == '*'){
    $resultado = $num1 * $num2;
}

if($_POST):
?>
<h1>Resultado operacao <?=$operacao?> <?=$resultado?></h1>
<?php 
endif;
?>












