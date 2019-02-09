<?php
$configDb = require '../config/db.config.local.php';
$conexao = pg_connect("host={$configDb['host']} port={$configDb['port']} dbname={$configDb['database']} user={$configDb['user']} password={$configDb['password']}");
var_dump($conexao);