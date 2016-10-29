<?php
require ("config.php");
?>
<html>
<head>
    <meta charset="utf-8">
	<title>Tela de Login</title>
    <link rel="stylesheet" text="text/css" href="css/estilo.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="author" content="Anderson">
    <link rel="shortcut icon" href="">
    <meta name="language" content="PT-BR" />
    <meta http-equiv="content-language" content="portuguese" />
    <meta name="rating" content="General" />
    <meta name="Robots" content="All" />
    <meta name="Googlebot" content="All" />
    <meta name="REVISIT-AFTER" content="3 days" />
    <meta name="document-distribution" content="global" />

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>


</head>
<body data-spy="scroll" data-target=".navbar-collapse" style="margin: 0px;">
<!-- ========== INICIO MENU ========== -->

<div class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <a class="standard-logo img-responsive " data-dark-logo="image/barra_duda.png"><img src="image/barra_duda.png" alt="Chocolates da Duda"></a>
            </div>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-center">

                <li class="active"><a href="#home">HOME</a></li>
                <li class="dropdown">

                <li class="active"><a href="#empresa">CHOCOLATES</a></li>
                <li class="dropdown">

                <li class="active"><a href="#qualificacao">DATAS ESPECIAIS</a></li>
                <li class="dropdown">

                <li class="active"><a href="#tipos">COMPRAS</a></li>
                <li class="dropdown">


                <li class="active"><a href="#contato">RECEITAS</a></li>
                <li class="dropdown">
            </ul>
        </div>

    </div>
</div>

<div class="content">
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
        <div id="login">
            <form name="signup" method="post" action="avalia_login.php">
                <table id="tab_login">
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
    </div>
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
        <div class="tab_banner">
            <img src="image/banner_natal.png" alt="Banner de Natal">
        </div>
    </div>
</div>


</body>
</html>