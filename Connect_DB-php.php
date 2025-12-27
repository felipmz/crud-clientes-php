<?php
$server = "localhost";
$user   = "root";
$pass   = "";
$db     = "cadastro_de_clientes"; // Dica: evite espaços em nomes de bancos

$conn = mysqli_connect($server, $user, $pass, $db);

if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>
