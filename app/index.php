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

// Execute uma consulta
$query = "SELECT * FROM Usuarios";
$result = mysqli_query($con, $query);

// Verifique se a consulta foi bem sucedida
if (!$result) {
    die("Erro ao executar a consulta: " . mysqli_error($con));
}

// Feche a conexão
mysqli_close($con);

// Loop para mostrar os dados
while ($row = mysqli_fetch_assoc($result)) {
  echo "ID: " . $row["id"] . "<br>";
  echo "Nome: " . $row["Nome"] . "<br>";
  echo "Email: " . $row["EMAIL"] . "<br>";
  echo "<br>";
}

?>
batata