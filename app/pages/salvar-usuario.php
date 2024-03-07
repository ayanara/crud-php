<?php
switch ($_REQUEST["acao"]) {
  case 'cadastrar':
    $nome = $_POST["nome"];
    $nivel_de_permissao = $_POST["nivel_de_permissao"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $senha = $_POST["cpf"];

    $sql = "INSERT INTO user (nome, nivel_de_permissao, cpf, email, senha) VALUES('{$nome}','{$nivel_de_permissao}','{$cpf}','{$email}','{$senha}')";

    $res = $con->query($sql);
    break;

  case 'editar':
    # code...
    break;

  case 'excluir':
    # code...
    break;
}
