<?php

$host = 'localhost';
$port = '9090';
$dbname = 'teste_backend';
$user = 'postgres';
$password = 'postgre';

$conection = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conection) {
    echo "Erro de conexão " . pg_last_error($conection);
} else {
    echo "Conexão estabelecida";
}



