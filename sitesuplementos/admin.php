<?php

include "conexao.php";

if(isset($_POST['email'])) {

  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $sql_query = $mysqli->query("SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'");
  $quantidade = $sql_query->num_rows;
  if($quantidade == 1) {

    $usuario = $sql_query->fetch_assoc();

    if(!isset($_SESSION)){
      session_start();
    }
    $_SESSION['admin'] = $usuario['id'];
    $_SESSION['nome'] = $usuario['nome'];

    header("Location: painel.php");

  } else {
      $erro = "login ou senha invalidos";
  }

}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>StrongSuplementos</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="admin.css">
  </head>
  <body class="p-3 m-0 border-0 bd-example">

    <!-- Example Code -->
    
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="home.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Strong Suplementos</font></font></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Suplementos</font></font></a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="creatina.php">Creatina</a></li>
          <li><a class="dropdown-item" href="whey.php">Whey</a></li>
          <li><a class="dropdown-item" href="bcaa.php">BCAA</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="home.php">HOME</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="quemsomos.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quem Somos?</font></font></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Admin</font></font></a>
      </li>
    </ul>

    <div class="container">
<form action="" method="post">
  <div>
      <label for="username">Email:</label>
      <input type="text" id="email" name="email">
  </div>

  <div>
      <label for="pass">Senha:</label>
      <input type="password" id="pass" name="senha">
  </div>
<?php if(isset($erro)) echo $erro; ?>

<button type="submit" name='logar' val>Logar</button>
</form>
</div>