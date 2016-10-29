<?php
require ("config.php");
?>
<html>
<head>
    <meta charset="utf-8">
	<title>Tela de Login</title>
    <link rel="stylesheet" text="text/css" href="css/estilo.css">
</head>
<body>
    <div id="tab_logo">
        <img src="image/barra_duda.png" alt="logo">
    </div>
	<div id="login">
    	<form name="signup" method="post" action="avalia_login.php">
    		<table id="tab_cadastro">
            	<tr>
                    <td><input type="text" name="login" required placeholder="Login" id="login" class="txt" /></td>
                </tr>
                <tr>
                    <td><input type="password" name="senha" required placeholder="Senha" id="senha" class="txt" /></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Login" name="go" id="botao_cad"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>