<?php

    require_once('repository/LoginRepository.php');
    require_once('util/base64.php');

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);


    if(empty($nome) || empty($email) || empty($senha)) {
        $msg = "Preencher todos os campos primeiro.";
    } else {
        if(fnAddCliente($nome, $email, $senha)) {
            $msg = "Sucesso ao gravar";
        } else {
            $msg = "Falha na gravação";
        }
    }
    
    $page = "cadastro-cliente.php";
    setcookie('notify', $msg, time() + 10, "eletrotec/{$page}", 'localhost');

    header("location: {$page}");
    exit;