<?php

define('HOST', 'localhost');
define('USUARIO', 'postgre');
define('SENHA', 'postgre');
define('DB', 'teste_backend');

$conection = pg_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar na base de dados');


echo($conection);