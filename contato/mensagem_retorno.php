<meta charset="utf-8">
<?php

if(isset($_GET['mensagem'])){
$email = $_GET["inputemail"];
$nome = $_GET["inputNome"];
$assunto = $_GET["inputAssunto"];
$textoarea = $_GET["inputtext"];

echo "Dados enviados com sucesso, abaixo seguem os dados que você enviou!<br><br>";
echo "Seu email: $email<br>";
echo "Seu Nome: $nome<br>";
echo "Seu Assunto: $assunto<br>";
echo "Seu cometario: $textoarea<br>";
}else{
    echo "não deu certo";
}

?>