<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trilhando o PHP</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php include ("menu.php");?>
<div class="container">
    <h2 class="form-signin-heading">Contato</h2>
    <div class="row">
        <fieldset>
            <legend style="display: block; padding-left: 2px; padding-right: 2px; border: none; text-align:center;">Contato</legend>
        <form class="span7 text-center col-md-5 col-md-offset-1" style="float: none; margin-left: auto;margin-right: auto;">
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus style="width:500px;"></br>
            <label for="inputPassword" class="sr-only">Nome</label>
            <input type="text" id="inputNome" class="form-control" placeholder="Nome" required style="width:500px;"></br>
            <label for="inputPassword" class="sr-only">Nome</label>
            <input type="text" id="inputAssunto" class="form-control" placeholder="Assunto" required style="width:500px;"></br>
            <label for="inputPassword" class="sr-only">Nome</label>
            <textarea style="margin: 0px; width: 498px; height: 152px;">
            </textarea>
            <button class="btn btn-info col-md-5 col-md-offset-1" style="width:250px; margin-left:120px;"type="submit">Enviar</button>
            <fieldset>
        </form>
    </div>
</div>
</div>
<?php include ("footer.php");?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>