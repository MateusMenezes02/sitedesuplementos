<?php 
if(!isset($_SESSION)) {
    session_start();
}
    require_once("conexao.php");
    if (!empty($_SESSION['mensagem'])) {
        echo $_SESSION['mensagem'];
        unset($_SESSION['mensagem']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formprod.css">
    <title>Document</title>
</head>
<body>
    <form action="listar.php" method="get" accept-charset="utf-8">
        Edite o sobre nós<input type="text" name="quemsomos" id=""><br>
        Edite o sobre creatina<input type="text" name="sobrecrea" id=""><br>
        Edite o sobre Whey<input type="text" name="sobrewhey" id=""><br>
        Edite o sobre BCAA<input type="text" name="sobrebcaa" id=""><br>
        <button type="submit" name="enviar">Enviar</button>
    </form>

   
</body>
</html>
