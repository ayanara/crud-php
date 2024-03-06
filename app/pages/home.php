<?php

// Include the connection file
include "../connection.php";

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


<!-- eApenas para não perder o codigo -->