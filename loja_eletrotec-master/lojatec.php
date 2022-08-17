<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon" />    
    <title>Eletrotec - LojaTec</title>
    <link rel="stylesheet" href="css/default.css" type="text/css" media="screen" />   
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/estilo.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/index.css" type="text/css" media="screen" />
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
                <nav class="menu">
                    <ul>
                        <li> <a href="index.php">Inicio</a> </li>
                        <li> <a href="lojatec.php">LojaTec</a> </li>
                        <li> <a href="">Fotos</a> </li>
                        <li> <a href="">Atendimento</a> </li>   <!--Depois sera adicionado cada pagina que levara para devido local-->
                        <li> <a href="">Acessórios</a> </li>
                        <li> <a href="">Câmeras e Alarmes</a> </li>
                        <li> <a href="">Contato</a> </li>
                    </ul>
                    <p class="contato"> (21) xxxx-xxxx |(21) xxxx-xxxx |(21) xxxx-xxxx |(21) xxxx-xxxx  </p>
                </nav><!--Fim menu-->
            <div id="banner">
                <div class="slider-wrapper theme-default">
                    <div id="slider" class="nivoSlider">
                        <img src="imagens/banner01.png" data-thumb="imagens/banner01.png" alt="" title="EletroTec"/>
                        <img src="imagens/banner02.jpg" data-thumb="imagens/banner02.jpg" alt="" title="EletroTec"/>
                        <img src="imagens/banner03.png" data-thumb="imagens/banner03.png" alt="" title="EletroTec" data-transition="slideInLeft" />
                    </div>            
                </div>
            </div><!-- Fim banner-->
        </header><!--Fim topo-->
    </section>
</body>
</html>