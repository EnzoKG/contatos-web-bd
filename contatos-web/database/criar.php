<?php

session_start();

include_once 'conexao.php'; 

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);

$query = $pdo->prepare('INSERT INTO contatos (nome, email, telefone) VALUES (:nome, :numero, :email)');    
$query->execute(array(':nome'=>$nome, ':telefone'=> $telefone, ':email'=> $email)); 

header('Location: /../public/pages/admin/area_restrita.php');

?>