<?php
session_start(); 
if((!isset ($_SESSION['nome']) == true) and (!isset ($_SESSION['senha']) == true)) { 
  unset($_SESSION['nome']); 
  unset($_SESSION['senha']); 
  header('location:../login/login.php'); }
  //$logado = $_SESSION['login']; 
  echo '<a href="logout.php">Logout</a><br><br>';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Seja Bem-vindo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/sb-admin.css" rel="stylesheet">
    <link href="../css/plugins/morris.css" rel="stylesheet">
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="../js/jquery-1.11.0.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/plugins/morris/raphael.min.js"></script>
    <script src="../js/plugins/morris/morris.min.js"></script>
    <script src="../js/plugins/morris/morris-data.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="central_adm.php">Sistema Code PHP</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
             </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo ucfirst($_SESSION['nome']);?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">            
                        <li>
                            <a href="/logout/logout.php"><i class="fa fa-fw fa-power-off"></i>Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i>Usuário<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="../cadastro_usuario/cadastro_usuarios.php">Cadastrar Usuário</a>
                            </li>
                            
                            <li>
                                <a href="../cadastro_usuario/usuarios_cadastrados.php">Listagem de Usuário</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#pagina"><i class="fa fa-fw fa-arrows-v"></i>Páginas<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="pagina" class="collapse">
                            <li>
                                <a href="../paginas/cadastrar_pagina.php">Cadastrar Páginas</a>
                            </li>
                            <li>
                                <a href="../paginas/paginas_cadastradas.php">Listagem páginas</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
                <div class="row">
                    
              <div class="container" style="margin-top:40px">
        <div class="row">
            <p>Está funcionando.</p>   
                   


                </div>
            </div>
        </div>
    </div>

                
</div>

</body>

</html>
