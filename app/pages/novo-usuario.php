<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Repositório PHP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <h1>Novo Usuário</h1>
  <form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
      <label class="form-control">Nome</label>
      <input type="text" name="nome" class="form-control
      " placeholder="Digite seu Nome"></input>
    </div>

    <div class="mb-3">
      <label class="form-control">Email</label>
      <input type="email" name="email" class="form-control" placeholder="Digite seu Email"></input>
    </div>

    <div class="mb-3">
      <label class="form-control">Senha</label>
      <input type="password" name="senha" class="form-control" placeholder="Digite sua senha"></input>
    </div>

    <div class="mb-3">
      <label class="form-control">CPF</label>
      <input type="text" name="cpf" id="cpf" class="form-control" placeholder="Digite seu CPF" maxlength="14" required>
    </div>

    <select name="nivel_de_permissao" class="form-control mb-3">
      <option value="1">Professor</option>
      <option value="2">Gestor</option>
      <option value="3">Administrador</option>
    </select>

    <div class="mb-3">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>