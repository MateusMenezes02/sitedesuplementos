<?php
if(!isset($_SESSION)) {
    session_start();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="painel.css">
    <title>Painel de Controle Admin</title>
</head>
<body>
    <h1>Bem vindo ao painel</h1>
    <a href="formProduto.php">
        <button type="submit">
            Incluir produto
        </button>
    </a>
    
</body>
</html>