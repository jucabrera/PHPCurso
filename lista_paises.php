<?php
$estados = file_get_contents('http://www.geonames.org/childrenJSON?geonameId=3469034');
$estados = json_decode($estados,true);
echo "<h1>Imprimir lista com nome do Estado, sigla e população</h1>";
echo "<pre>";
print_r(array_keys($estados));
print_r($estados);