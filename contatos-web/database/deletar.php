<?php

include_once 'conexao.php';

$id = $_GET["id"];

$sql = "DELETE FROM `contatos` WHERE `contatos`.`id` = ".$id;
$query = $pdo->prepare($sql);
$query->execute();

header('Location: /../public/pages/admin/area_restrita.php');

?>
