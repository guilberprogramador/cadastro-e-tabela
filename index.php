<?php
    include "conecta.php";
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FORM ACTION</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>

<form action="cadastro.php" method="POST">

<input type="email" placeholder="E-mail" id="email" name="email">
<input type="password" placeholder="SENHA" id="senha" name="senha">
<input type="submit"  id="cad" name="cad" value="CADASTRAR">
</form>
    
</body>
</html>