<html>

<head>
    <title>Incluir Usuário</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body class="imagem-4">
  <div class="">  
    <div class="formulario bg-dark">
    <h2 class="text-light">Cadastrar</h2>
    <form action="IncluirUsuarioOK.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-light">Usuário:</label>
    <input type="text"  class="form-control" id="email" aria-describedby="emailHelp" name="email">
    <small id="emailHelp" class="form-text text-muted text-light">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-light">Senha:</label>
    <input type="password" class="form-control" id="pwd" name="senha">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
    </div>
    </div>
</body>

<?php
   
?>


</html>