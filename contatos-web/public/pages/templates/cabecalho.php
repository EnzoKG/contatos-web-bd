<?php
    require_once __DIR__.'/../../../app/funcoes.php';
    
    if(!isset($tagLinkLogin))
    {
        $tagLinkLogin = '<a class="btn btn-primary btn-login" href="'.rotaPages('/../form_login.php').'">Efetue o Login</a>';
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos</title>
    <link rel="stylesheet" href="<?=rotaBase('public/assets/css/style.css');?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<nav class="menu">
    <ul>
        <li class><?=$tagLinkLogin?></li>
    </ul>
</nav>

<div class="container">
</div>