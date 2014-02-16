<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Checkout Mirror Fashion</title>
        <meta name="viewport" content="width=device-width">
        <script src="js/jquery.js"></script>
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/inputmask-plugin.js"></script> 
    </head>
    <body style="padding-top: 70px;">
        <?php
        include("conexao.php");
        $dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $_POST[id]");
        $produto = mysqli_fetch_array($dados);
        ?>
        <style>
            .navbar {
                margin: 0;
            }
        </style>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo-black.png" alt="Mirror Fashion">
                </a>

                <button class="navbar-toggle" type="button"
                        data-target=".navbar-collapse" data-toggle="collapse">
                    <span class="glyphicon glyphicon-align-justify"></span>
                </button>

            </div>
            <ul class="nav navbar-nav collapse navbar-collapse">
                <li><a href="sobre.php"> <span class="glyphicon glyphicon-home"> Sobre </span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-question-sign"> Ajuda </span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-list-alt"> FAQ </span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-bullhorn"> Contato </span></a></li>
            </ul>
        </nav>

        <div class="jumbotron">
            <div class="container">
                <h1>Otima escolha!</h1>
                <p>Obrigado por comprar na Mirror Fashion! 
                    Preencha seus dados para efetivar a compra.</p>
            </div>
        </div>   
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h2 class="panel-title">Sua compra</h2>
                        </div>
                        <div class="panel-body">
                            <img src="img/produtos/foto<?= $produto["id"] ?>-<?= $_POST["cor"] ?>.png"
                                 class="img-thumbnail img-responsive hidden-xs" >
                            <dl>
                                <dt>Produto</dt>
                                <dd><?= $produto["nome"] ?></dd>

                                <dt>Cor</dt>
                                <dd><?= $_POST["cor"] ?></dd>

                                <dt>Tamanho</dt>
                                <dd><?= $_POST["tamanho"] ?></dd>

                                <dt>Valor</dt>
                                <dd><?= $produto["preco"] ?></dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h2 class="panel-title">Seus Dados</h2>
                        </div>
                        <div class="panel-body">
                            <form action="efetivar.php" method="POST">
                                <div class="row">
                                    <fieldset class="col-md-6">
                                        <legend>Dados pessoais</legend>

                                        <div class="form-group">
                                            <label for="nome">Nome completo</label>
                                            <input type="text" class="form-control" id="nome" name="nome" autofocus required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">@</span>
                                                <input type="email" class="form-control"
                                                       id="email" name="email" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="cpf">CPF</label>
                                            <input type="text" class="form-control" id="cpf" name="cpf"
                                                   placeholder="000.000.000-00" data-mask="999.999.999-99">
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="sim" name="spam" checked>
                                                Quero receber spam da Mirror Fashion
                                            </label>
                                        </div>

                                    </fieldset>
                                    <fieldset class="col-md-6">
                                        <legend>Cartao de credito</legend>

                                        <div class="form-group">
                                            <label for="numero-cartao">Numero - CVV</label>
                                            <input type="text" class="form-control" placeholder="0000 0000 0000 0000"
                                                   id="numero-cartao" name="numero-cartao" data-mask="9999 9999 9999 9999">
                                        </div>
                                        <div class="form-group">
                                            <label for="bandeira-cartao">Bandeira</label>
                                            <select name="bandeira-cartao" id="bandeira-cartao"
                                                    class="form-control">
                                                <option value="master">MasterCard</option>
                                                <option value="visa">VISA</option>
                                                <option value="amex">American Express</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="validade-cartao">Validade</label>
                                            <input type="month" class="form-control"
                                                   id="validade-cartao" name="validade-cartao">
                                        </div>
                                    </fieldset>
                                    <button type="submit" class="btn-lg btn-primary">
                                        <span class="glyphicon glyphicon-thumbs-up"></span>
                                        Confirmar Pedido
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <script type="text/javascript">
                document.querySelector('input[type=email]').oninvalid = function() {
// remove mensagens de erro antigas
                    this.setCustomValidity("");
// reexecuta validação
                    if (!this.validity.valid) {
// se inválido, coloca mensagem de erro
                        this.setCustomValidity("Email invalido Poha!");
                    }
                };

                document.querySelector('input[type=text]').oninvalid = function() {
// remove mensagens de erro antigas
                    this.setCustomValidity("");
// reexecuta validação
                    if (!this.validity.valid) {
// se inválido, coloca mensagem de erro
                        this.setCustomValidity("Campo Invalido seu Asno!");
                    }
                };
            </script>

            <script src="js/jquery.js"></script>
            <script src="js/bootstrap.js"></script>
    </body>
</html>