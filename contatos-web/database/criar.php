<?php

session_start();

include_once 'conexao.php'; 

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);

$query = $pdo->prepare('INSERT INTO contatos (nome, email, telefone) VALUES (:nome, :email, :telefone)');    
$query->execute(array(':nome'=>$nome, ':email'=> $email, ':telefone'=> $telefone)); 

header('Location: /../public/pages/admin/area_restrita.php');

?>