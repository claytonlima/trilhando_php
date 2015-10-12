<?php
session_start();
?>
<meta charset="utf-8">

<?php
$primeiroNome = $_POST['firstname'];
$ultimoSobrenome = $_POST['lastname'];
$email = $_POST['email'];
$usuario = $_POST['username'];
$senha = $_POST['password'];


if($primeiroNome != "" && $ultimoSobrenome != "" && $email != "" && $usuario != "" && $senha != ""){
    // faz a conexão com o banco de dados
    require_once "conexao.php";
    $conn = conexao();


    $smt = $conn->prepare("INSERT INTO usuario (primeironome,ultimonome,email,usuario,senha) VALUES (:primeiroNome,:ultimoSobrenome,:email,:usuario,:senha);");

    $smt->bindParam(":primeiroNome", $primeiroNome);
    $smt->bindParam(":ultimoSobrenome", $ultimoSobrenome);
    $smt->bindParam(":email", $email);
    $smt->bindParam(":usuario", $usuario);
    $smt->bindParam(":senha", $senha);
    $smt->execute(array(':primeiroNome'=>$primeiroNome,
        ':ultimoSobrenome'=>$ultimoSobrenome,
        ':email'=>$email,
        ':usuario'=>$usuario,
        ':senha'=>$senha));

    //ver porque não caiu no no primeiro if
    $obj = $smt->fetch(PDO::FETCH_ASSOC);
}

if ($obj) //se o nome e senha coincidirem a sessão é criada
{
    $_SESSION['nome']= $_COOKIE['nome'];
    $_SESSION['senha']= $_COOKIE['senha'];

    header('location: /central_admin/central_adm.php');
}
else
{
    echo "Por favor, não esqueça de preencher todos os campos!";
    echo "<a href='/cadastro_usuario/cadastro_usuarios.php'><li>retornar a Tela de cadastro</li>";
}
?>
