<meta charset="utf-8">
<?php
$email = $_GET['inputEmail'];
$nome = $_GET['inputNome'];
$assunto = $_GET['inputAssunto'];
$texto = $_GET['inputtextarea'];

echo "Dados enviados com sucesso, abaixo seguem os dados que você enviou!<br><br>";

echo "Seu email: $email<br>";
echo "Seu Nome: $nome<br>";
echo "Seu Assunto: $assunto<br>";
echo "Seu texto: $texto";



?>