<?php
if(!isset($_SESSION)) {
    session_start();
}
    require_once("conexao.php");

    if (isset($_GET['enviar'])) {
        if (!empty($_GET['quemsomos']) || !empty($_GET['sobrecrea']) || !empty($_GET['sobrewhey']) || !empty($_GET['sobrebcaa'])) {
            $quemsomos=$_GET['quemsomos'];
            $sobrecrea=$_GET['sobrecrea'];
            $sobrewhey=$_GET['sobrewhey'];
            $sobrebcaa=$_GET['sobrebcaa'];

            $comando="INSERT INTO produtos(quemsomos, sobrecrea, sobrewhey, sobrebcaa) VALUES ('$quemsomos', '$sobrecrea', '$sobrewhey', '$sobrebcaa')";
            $enviar=mysqli_query($conn, $comando);
            if ($enviar) {
                $_SESSION['mensagem']="Produto cadastrado";
                header("location:formProduto.php");
                exit;
            }else{
                $_SESSION['mensagem']="Erro ao cadastrar produtos";
                header("location:formProduto.php");
                exit;
            }
        }
    }


?>