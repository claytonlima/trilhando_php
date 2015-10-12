<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Cadastro de Usuários</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <style type="text/css">
        
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="span3">
    <h2>Cadastro</h2>
    <form method="post" action="/conexao/cadastro_usuarios.php">
    <label>Primeiro Nome</label>
    <input type="text" name="firstname" class="span3">
    <label>Último sobrenome</label>
    <input type="text" name="lastname" class="span3">
    <label>Email</label>
    <input type="email" name="email" class="span3">
    <label>Usuário</label>
    <input type="text" name="username" class="span3">
    <label>Senha</label>
    <input type="password" name="password" class="span3">
    <input type="submit" value="Salvar" class="btn btn-primary pull-right">
    <div class="clearfix"></div>
    </form>
</div>
<script type="text/javascript">

</script>
</body>
</html>
