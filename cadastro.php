<html>

<head>
  <title>Cadastro</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/styles.css">
</head>

<body class="imagem-4">
  <div class="">
    <div class="formulario bg-dark">
      <h2 class="text-light">Cadastrar</h2>
      <form action="validaCadastro.php" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1" class="text-light">Nome: </label>
          <input type="text" class="form-control" id="nome" aria-describedby="emailHelp" name="nome">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1" class="text-light">Sexo: </label>
          <input type="text" class="form-control" id="Sexo" name="sexo">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1" class="text-light">Usuário: </label>
          <input type="text" class="form-control" id="usuario" name="usuario">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1" class="text-light">Email: </label>
          <input type="text" class="form-control" id="email" name="email">
          <small id="emailHelp" class="form-text text-muted text-light">Nós nunca compartilharemos seu e-mail</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1" class="text-light">Senha:</label>
          <input type="password" class="form-control" id="senha" name="senha">
          <small id="emailHelp" class="form-text text-muted text-light">Nunca compartilhe sua senha</small>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <a href="index.php" type="submit" class="btn btn-primary ml-5 mb-5">Voltar</a>
      </form>
    </div>
  </div>
</body>

</html>