<?php
include "conecta.php";
// pegando dados

$email = $_POST["email"];
$md5 = $senha = $_POST["senha"];



$stmt = $conecta->prepare("INSERT INTO cadastro (email,senha) VALUES (:email, :senha)");

$stmt->bindParam(":email", $email);
$stmt->bindParam(":senha", $senha);
$stmt->execute();

header("Location: index.php");

?>