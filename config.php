<meta charset="utf-8">
<?php
$host = "localhost";
$user = "andersonbhbr";
$pass = "loverei169";
$banco = "empresa";
$conexao = new mysqli($host,$user,$pass,$banco);

if (!$conexao) {
    die('Não foi possível conectar-se ao banco de dados: ' . mysqli_connect_error());
    exit();
}
?>