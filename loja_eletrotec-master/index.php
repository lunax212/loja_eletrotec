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
            <div class="logo"><img src="imagens/logo.png" href="index.php" width="233" height="75"></div>
            <div class="d-grid gap-2 d-md-block"></div>
                <nav class="menu">
                    <ul>
                        <li> <a href="index.php">Início</a> </li>
                        <li> <a href="lojatec.php">LojaTec</a> </li>
                        <li> <a href="">Fotos</a> </li>
                        <li> <a href="">Atendimento</a> </li>   <!--Depois sera adicionado cada pagina que levara para devido local-->
                        <li> <a href="">Acessórios</a> </li>
                        <li> <a href="cameras-e-alarmes.php">Câmeras e Alarmes</a> </li>
                        <li> <a href="">Contato</a> </li>
                        <p class="contato"> (21) xxxx-xxxx |(21) xxxx-xxxx |(21) xxxx-xxxx |(21) xxxx-xxxx  </p>
                    </ul>
                    
                </nav><!--Fim menu-->
                <div class="col-10 offset-1 mt-5">
        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-3">
                <h1 class="display-5 fw-bold">Seja bem vindo a sua loja de eletrônicos !</h1>
                <p class="col-md-8 fs-4">   - Aqui você encontrará</p>
                <p class="col-md-8 fs-4">Acessórios para seu celular, computador, notebooks...</p>
                <p class="col-md-8 fs-4">Produtos para sua segurança</p>
                <p class="col-md-8 fs-4">E muito mais !!!</p>
            </div>
            <div class="d-grid gap-2 d-md-block">
            <button>
                <a href="login.php" type="submit" class="btn btn-dark">Login</a>
                <a href="cadastro-cliente.php" type="submit" class="btn btn-dark">Cadastre-se</a>
            </button>
            </div>
        </div>
        </fieldset>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </div>
        </header><!--Fim topo-->
    </section>
</body>
</html>