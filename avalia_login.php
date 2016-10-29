<html>
<head>
    <meta charset="utf-8">
    <title>Cadastro de Clientes</title>
    <link rel="stylesheet" text="text/css" href="css/estilo.css">
</head>
<body>
<?php
include_once ("config.php");

$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = "INSERT INTO clientes (login, senha)
        VALUES ('$login', '$senha')
";

$resultado = mysqli_query($conexao,$sql);

echo "<script>
				  	alert('Seja bem-vindo.');
	  </script>
echo <meta http-equiv='refresh' content='0, url=index.html'>";
?>

</body>
</html>