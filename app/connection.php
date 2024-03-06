<?php

// Defina as informações de conexão
$host = "mysql";
$user = "root";
$password = "senha_segura";
$database = "educa_sme";
$port = 3306; // Altere a porta para 3307

// Crie a conexão
$con = mysqli_connect($host, $user, $password, $database, $port);

// Verifique se a conexão foi bem sucedida
if (!$con) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}
?>