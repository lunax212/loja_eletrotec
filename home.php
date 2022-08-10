<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <title>Eletrotec</title>
    <link rel="stylesheet" href="css/default.css" type="text/css" media="screen" />   
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/estilo.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/index.css" type="text/css" media="screen" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</head>
<body>
<section class="container">
        <header class="topo">
            <div class="logo"><img src="imagens/logo.png" width="233" height="75"></div>
            <div class="d-grid gap-2 d-md-block"></div>
                <nav class="menu">
                    <ul>
                        <li> <a href="cadastro-cliente.php">Cadastro de Clientes</a> </li>
                        <li> <a href="formulario-cadastro-produto.php">Cadastro de Produtos</a> </li>
                        <li> <a href="listagem-de-produtos.php">Listagem de Produtos</a> </li>
                        <li> <a href="">Listagem de Clientes</a> </li>
                    </ul>
        </header>
        <div id="banner">
                <div class="slider-wrapper theme-default">
                    <div id="slider" class="nivoSlider">
                        <img src="imagens/banner01.png" data-thumb="imagens/banner01.png" alt="" title="EletroTec"/>
                        <img src="imagens/banner02.jpg" data-thumb="imagens/banner02.jpg" alt="" title="EletroTec"/>
                        <img src="imagens/banner03.png" data-thumb="imagens/banner03.png" alt="" title="EletroTec" data-transition="slideInLeft" />
                    </div>            
                </div>
            </div><!-- Fim banner-->
            


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </div>
    <div>    <br><br>

<?php foreach(fnLocalizaProdutoPorNome($nome) as $produto): ?>
    <div>
        <img width=300 high=200 src="<?= $produto->foto ?>" class="img" alt="...">
        
        <div class="">
            <h5 class="">Nome: <?= $produto->nome ?></h5>
            <p class="">Validade: <?= $produto->validade ?></p>
            <p class="">Quantidade: <?= $produto->quantidade ?></p>
            <p class="">Código do Produto: <?= $produto->codproduto ?></p>
        </div>

    </div>
<br>
<?php endforeach; ?>
<?php include("rodape.php"); ?>
</body>
</html></div>
    <div>
    <a class="btn btn-outline-danger" href="logout.php" text-align=>Logout</a>
</div>
    </section>
</body>
</html>