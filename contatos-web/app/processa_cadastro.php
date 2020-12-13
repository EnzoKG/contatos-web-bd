<?php

session_start();
require_once __DIR__.'/funcoes.php';

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);

if(!empty($nome) and !empty($email))
{
    if(isset($_SESSION['contatos']))
    {
        $contatos = $_SESSION['contatos'];
    }
    $contato['nome'] = $nome;
    $contato['email'] = $email;
    $contato['telefone'] = $telefone;

    $contatos[] = $contato;

    $_SESSION['contatos'] = $contatos;

    header("Location: ".rotaPages());
    die();
} else {
    $msgErro = "O nome e o email são obrigatórios";
    $msgErro = filter_var($msgErro, FILTER_SANITIZE_ENCODE);
    header("Location: ".rotaPages('form.php?erro='.$msgErro));
    die();
}

?>