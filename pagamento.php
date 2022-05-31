<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Pagamento</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/Bootstrap-4---Payment-Form.css">
  <link rel="stylesheet" href="assets/css/Footer-Dark-Multi-Column.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="./css/styles.css">
</head>

<body class="imagem-8">
  <div class="container py-5 my-7 opacidade">

    <div class="row">
      <div class="col-lg-7 mx-auto">
        <div class="bg-dark rounded-lg shadow-sm p-5">
          <ul role="tablist" class="nav bg-light nav-pills rounded-pill nav-fill mb-3">
            <li class="nav-item">
              <a data-toggle="pill" href="#nav-tab-card" class="nav-link active rounded-pill">
                <i class="fa fa-credit-card"></i>
                Cartão de Crédito
              </a>
            </li>
            <li class="nav-item">
              <a data-toggle="pill" href="#nav-tab-paypal" class="nav-link rounded-pill">
                <i class="fa fa-paypal"></i>
                Paypal
              </a>
            </li>
            <li class="nav-item">
              <a data-toggle="pill" href="#nav-tab-bank" class="nav-link rounded-pill">
                <i class="fa fa-university"></i>
                Transferência Bancária
              </a>
            </li>
          </ul>

          <div class="tab-content">

            <div id="nav-tab-card" class="tab-pane fade show active">
              <form action="validaPagamento.php" method="post">
                <div class="form-group">
                  <label for="username" class="text-light">Nome Completo (no cartão)</label>
                  <input type="text" name="nome" placeholder="Ex: Silvio Rogerio" required class="form-control">
                </div>
                <div class="form-group">
                  <label for="cardNumber" class="text-light">Número do Cartão</label>
                  <div class="input-group">
                    <input type="text" name="nrocartao" id="cartao" placeholder="Número do seu cartão" maxlength="19" required class="form-control">

                    <div class="input-group-append">
                      <span class="input-group-text text-muted">
                        <i class="fa fa-cc-visa mx-1"></i>
                        <i class="fa fa-cc-amex mx-1"></i>
                        <i class="fa fa-cc-mastercard mx-1"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label><span class="hidden-xs text-light">Data de Validade</span></label>
                      <div class="input-group">
                        <input type="text" placeholder="Mês" name="mes" min="1" max="12" maxlength="2" class="form-control" required>
                        <input type="text" placeholder="Ano" name="ano" min="2000" max="2100" maxlength="4" class="form-control" required>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group mb-4">
                      <label data-toggle="tooltip" title="Three-digits code on the back of your card" class="text-light">CVV
                        <i class="fa fa-question-circle "></i>
                      </label>
                      <input type="text" name="cvv" required class="form-control">
                    </div>
                  </div>



                </div>
                <button type="submit" class="btn btn-primary">Confirmar</button>
              </form>
            </div>

            <!-- Paypal info -->
            <div id="nav-tab-paypal" class="tab-pane fade text-light">
              <p>Paypal é a forma mais simples de pagamento online</p>
              <p>
                <button type="button" class="btn btn-primary rounded-pill"><i class="fa fa-paypal mr-2"></i> Entrar no meu Paypal</button>
              </p>
              <p class="text-muted">Assine o melhor plano com o melhor preço através do Paypal</p>
            </div>

            <!-- bank transfer info -->
            <div id="nav-tab-bank" class="tab-pane fade text-light">
              <h6>Detalhes Conta Bancária</h6>
              <dl>
                <dt>Banco</dt>
                <dd>Nubank</dd>
              </dl>
              <dl>
                <dt>Número da conta</dt>
                <dd>40028922</dd>
              </dl>
              <dl>
                <dt>Agência</dt>
                <dd>0001 Banco 260 - NU Pagamentos S.A.</dd>
              </dl>
            </div>
          
          </div>

        </div>
      </div>
    </div>
  </div>

  


 
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/Bootstrap-4---Payment-Form.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
  <script>
    $(".esconder").hide();
    $("#expandir").click(function() {
      $("#learn").remove();

      $(".esconder").show();

    });
    $("#cartao").inputmask({
      "mask": "9999 9999 9999 9999"
    });
  </script>
</body>

</html>