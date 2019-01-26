<?php
$paises = file_get_contents('http://www.geonames.org/childrenJSON?geonameId=3469034');
$paises = json_decode($paises,true);
echo "<pre>";
print_r($paises);