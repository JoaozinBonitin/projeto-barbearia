<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Login</title>
</head>

<body class="imagem-2">
    <div class="">
        <div class="formulario bg-dark">
            <h2 class="text-light">Entrar</h2>
            <form action="validaLogin.php" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="text-light">Usuário:</label>
                    <input type="text" class="form-control" id="email" aria-describedby="emailHelp" name="usuario">
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



</html>