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
                <h1>Obrigado por comprar na Mirror Fashion!</h1>
            </div>
        </div>   
        <div class="container">
            <?php
            mail("$_POST[email]", "Compra efetuada na Mirror Fashion", "$_POST[nome], sua compra foi efetivada. Obrigado");
            ?>
            <div class="col-sm-8">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h2 class="panel-title">Um email foi enviado para a confirmação da compra!</h2>
                    </div>
                </div>
            </div>
            <script src="js/jquery.js"></script>
            <script src="js/bootstrap.js"></script>
    </body>
</html>