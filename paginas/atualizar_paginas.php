<?php
//session_start();
//if((!isset ($_SESSION['nome']) == true) and (!isset ($_SESSION['senha']) == true)) {
//    unset($_SESSION['nome']);
//    unset($_SESSION['senha']);
//    header('location:index.php'); }
////$logado = $_SESSION['login'];
//echo '<a href="logout.php">Logout</a><br><br>';
//?>
<?php include "../conexao/conexao.php"; ?>
<?php include "../conexao/carregar_pagina.php";?>
<?php
        $id = $_GET['id'];
        $pagina = carregarPagina($id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Seja Bem Vindo -Área Administrativa</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/sb-admin.css" rel="stylesheet">
    <link href="../css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="../js/bootstrap-datetimepicker.min.js"></script>
    <script src="../js/jquery-1.11.0.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="//cdn.ckeditor.com/4.5.4/standard/ckeditor.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../central_admin/central_adm.php">Sistema Code PHP</a>
        </div>
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
                    <a href="javascript:;" data-toggle="collapse" data-target="#menu_pagina"><i class="fa fa-fw fa-arrows-v"></i>Páginas<i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="menu_pagina" class="collapse">
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

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Usuário
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="../central_admin/central_adm.php">Site Code PHP</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-table"></i>&nbsp Alterar página
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->
            <form class="form-horizontal" method="post" action="/conexao/alterar_conteudo_pagina.php">
                <fieldset>

                    <!-- Form Name -->
                    <legend>Alterar dados da Página</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">ID da página</label>
                        <div class="col-md-5">
                            <input id="textinput" readonly="true" name="id_pagina" type="text" class="form-control input-md" required="" value="<?php echo $pagina['id_pagina'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Link Página</label>
                        <div class="col-md-5">
                            <input id="textinput" readonly="true" name="link_pagina" type="text" class="form-control input-md" required="" value="<?php echo $pagina['link_pagina']?>">
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Página</label>
                        <div class="col-md-5">
<!--                            <input id="textinput" name="pagina" type="text" class="form-control input-md" required="" value="--><?php //echo $pagina['pagina']?><!--">-->
                            <textarea name="pagina" class='ckeditor'><?php echo $pagina['pagina']?></textarea>
                            <script>
                                CKEDITOR.replace("pagina");
                            </script>

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Conteúdo</label>
                        <div class="col-md-5">
<!--                            <input id="textinput" name="conteudo" type="text" placeholder="Digite seu email" class="form-control input-md" required="" value="--><?php //echo $pagina['conteudo'] ?><!--">-->
                            <textarea name="conteudo"><?php echo $pagina['conteudo'] ?></textarea>
                            <script>
                            CKEDITOR.replace("conteudo");
                            </script>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="singlebutton"></label>
                        <div class="col-md-4">
                            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Salvar</button>
                        </div>
                    </div>

                </fieldset>
            </form>
</body>

</html>