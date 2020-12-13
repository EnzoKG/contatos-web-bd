<?php
    session_start();
    if(isset($_SESSION['perfil']))
    {
        unset($_SESSION['perfil']);
    }
    require_once __DIR__ . '/funcoes.php';
    header("Location: ".rotaBase());