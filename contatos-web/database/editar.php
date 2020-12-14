<?php

include_once 'conexao.php';

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

$sql = "UPDATE `contatos` SET `Nome` = '".$nome."', `Email` = '".$email."', `Telefone` = '".$telefone."' WHERE `contatos`.`id`= ".$id;
$query = $pdo->prepare($sql);
$query->execute();

header('Location: /../public/pages/admin/area_restrita.php');

?>