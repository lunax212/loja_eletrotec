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
        </header>
<body>
    <?php include('navbar.php'); ?>
    <div class="col-6 offset-3">
        <fieldset>
            <legend>Edição do Produto</legend>
            <form action="editaProduto.php" method="post" class="form" enctype="multipart/form-data">
                <div class="card col-4 offset-4 text-center">
                    <img src="<?= $produto->foto ?>" id="avatarId" class="rounded" alt="foto do produto">
                </div>
                <div class="mb-3 form-group">
                    <label for="fotoId" class="form-label">Foto</label>
                    <input type="file" name="foto" id="fotoId" class="form-control">
                    <div id="helperFoto" class="form-text">Importe a foto</div>
                </div>
                <div>
                    <input type="hidden" name="idProduto" id="produtoId" value="<?= $produto->id ?>">
                </div>
                <div class="mb-3 form-group">
                    <label for="nomeId" class="form-label">Nome</label>
                    <input type="text" name="nome" id="nomeId" class="form-control" placeholder="Informe o nome" value="<?= $produto->nome ?>">
                    <div id="helperNome" class="form-text">Informe o nome do produto</div>
                </div>
                <div class="mb-3 form-group">
                    <label for="codprodutoId" class="form-label">Código do Produto</label>
                    <input type="number" name="codproduto" id="codprodutoId" class="form-control" placeholder="Informe o código do produto" value="<?= $produto->codproduto ?>">
                    <div id="helperCodproduto" class="form-text">Informe o código do produto</div>
                </div>
                <div class="mb-3 form-group">
                    <label for="quantidadeId" class="form-label">Quantidade</label>
                    <input type="number" name="quantidade" id="quantidadeId" class="form-control" placeholder="Informe a quantidade" value="<?= $produto->quantidade ?>">
                    <div id="helperQuantidade" class="form-text">Informe a quantidade</div>
                </div>
                <div class="mb-3 form-group">
                    <label for="validadeId" class="form-label">Validade</label>
                    <input type="text" name="validade" id="validadeId" class="form-control" placeholder="Informe a validade" value="<?= $produto->validade ?>">
                    <div id="helperValidade" class="form-text">Informe a Validade</div>
                </div>
                <button type="submit" class="btn btn-dark">Enviar</button>
                <div id="notify" class="form-text text-capitalize fs-4"><?= isset($_COOKIE['notify']) ? $_COOKIE['notify'] : '' ?></div>
            </form>
        </fieldset>
    </div>
    <div>
    <a class="btn btn-outline-danger" href="logout.php" text-align=>Logout</a>
</div>
    <?php include("rodape.php"); ?>
    <script src="js/base64.js"></script>
</body>

</html>