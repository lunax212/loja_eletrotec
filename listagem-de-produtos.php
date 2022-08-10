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
            
</section>

    <div class="col-6 offset-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Código do Produto</th>
                    <th>Quantidade</th>
                    <th>Data cadastro</th>
                    <th colspan="2">Gerenciar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach(fnLocalizaProdutoPorNome($nome) as $produto): ?>
                <tr>
                   <td><?= $produto->id ?></td> 
                   <td><?= $produto->nome ?></td>
                   <td><?= $produto->codproduto ?></td> 
                   <td><?= $produto->quantidade ?></td>
                   <td><?= $produto->created_at ?></td>
                   <?php if($_SESSION['login']->id == 1) {

                   ?>
                  
                   <td><a href="Id" onclick="gerirUsuario(<?= $produto->id ?>, 'edit');">Editar</a></td> 
                    <td><a onclick="return confirm('Deseja realmente excluir?') ? gerirUsuario(<?= $produto->id ?>, 'del') : '';" href="#">Excluir</a></td> 
                    <?php } else {
                        "";
                    }
                    ?>
                   <td><a href="<?= $produto->foto ?>" download="">Download</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <?php if(isset($notificacao)) : ?>
            <tfoot>
                <tr>
                    <td colspan="7"><?= $_COOKIE['notify'] ?></td>
                </tr>
            </tfoot>
            <?php endif; ?>
        </table>
    </div>
    <?php include("rodape.php"); ?>
    <script>
        window.post = (data) => {
            return fetch(
                'set-session.php',
                {
                    method: 'POST',
                    headers: {'Content-Type': 'application/json'},
                    body: JSON.stringify(data)
                }
            )
            .then(response => {
                console.log(`Requisição completa! Resposta:`, response);
            });
        }

        function gerirUsuario(id, action) {
            
            post({data : id});

            url = 'excluirProduto.php';
            if(action === 'edit')
                url = 'formulario-edita-produto.php';
            window.location.href = url;
        }
    </script>
    <div>
    <a class="btn btn-outline-danger" href="logout.php" text-align=>Logout</a>
</div>
  </body>
</html>