<?php
    session_start();
    require_once __DIR__ . '/funcoes.php';

    $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    if($login == 'admin' and $senha == '123')
    {
        $_SESSION['perfil'] = "admin";
        header("Location: ".rotaPages('admin/area_restrita.php'));
        die();
    } else {
        $msgErro = "Login ou senha incorretos";
        $msgErro = filter_var($msgErro, FILTER_SANITIZE_ENCODED);
        header("Location: ".rotaPages('form_login.php?erro='.$msgErro));
        die();
    }