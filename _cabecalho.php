<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php print $cabecalho_title; ?></title>
        <script src="js/jquery.js"></script>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
        <link href='http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script'
              rel='stylesheet'>
        <?php print @$cabecalho_css; ?>

        <meta name="viewport" content="width=device-width">
    </head>
    <body>

        <header class="container">
            <h1><img src="img/logo.png" alt="Mirror Fashion"></h1>

            <p class="sacola">
                Nenhum item na sacola de compras
            </p>

            <nav class="menu-setores">
                <ul>
                    <li><a href="#">Sua Conta</a></li>
                    <li><a href="#">Lista de Desejos</a></li>
                    <li><a href="#">Cartão Fidelidade</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a href="#">Ajuda</a></li>
                </ul>
            </nav>
        </header>