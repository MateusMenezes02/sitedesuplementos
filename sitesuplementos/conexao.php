<?php

$usuario = "root";
$senha = "Rmmam200499";
$database = "login";
$host = "localhost";

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->connect_error) {
    die("Falha ao conectar com o banco de dados: " . $mysqli->connect_error);
} 