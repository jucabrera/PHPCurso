<?php
$linguagem = 'PHP';
echo  "<pre>";
echo "<h1>POST</h1>";
print_r($_POST);

echo "<h1>GET</h1>";
print_r($_GET);

echo "<h1>FILES</h1>";
print_r($_FILES);

echo "<h1>REQUEST</h1>";
print_r($_REQUEST);

echo "<h1>SERVER</h1>";
print_r($_SERVER);

echo "<h1>GLOBALS</h1>";
print_r($GLOBALS);
?>

<form method="post" enctype="multipart/form-data">
	Numero :<input type="text" name="numero" id="numero"><br>
	Arquivo : <input type="file" name="arquivo">	
	<input type="submit" value="calcular">
</form>