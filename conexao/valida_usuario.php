<?php
session_start();
?>
<meta charset="utf-8">

<?php
require_once "conexao.php";
$conn = conexao();
$nome = $_POST['nome'];
$senha = $_POST['senha'];

$dados = array(':nome' => $nome);
$smt = $conn->prepare("Select usuario,senha from usuario WHERE usuario = :nome");
$smt->execute($dados);
$retornoUsuario = $smt->fetch(PDO::FETCH_ASSOC);
$count = $smt->rowCount();


If($count > 0){

    if(password_verify($senha,$retornoUsuario['senha'])){
        $_COOKIE['nome']  = $nome;
        $_COOKIE['senha']  = $senha;
    }
    else{
        echo "Não Entrei no Login";
    }
}
else{
    echo "Tente novamente";
}
//if($_COOKIE['nome'] !="" && $_COOKIE['senha'] !=""){
//    // faz a conexão com o banco de dados
//
//
//    $smt = $conn->prepare("Select * from usuario where usuario= ? and senha = ?");
//    $smt->bindParam(1, $_POST['nome'], PDO::PARAM_STR);
//    $smt->bindParam(2, $senha, PDO::PARAM_STR);
//    $smt->execute();
//    $obj = $smt->fetch(PDO::FETCH_ASSOC);
//
//}else{
//    echo "não deixe de preencher os campos";
//}
//
if ($count > 0) //se o nome e senha coincidirem a sessão é criada
{
    $_SESSION['nome']= $_COOKIE['nome'];
    $_SESSION['senha']= $_COOKIE['senha'];

    header('location: /central_admin/central_adm.php');
}
else //caso não coincida o usuário e senha, vai para a página de erro
{
    echo "<a href='/login/login.php'><li>retornar ao login</li>";
}
//if($_COOKIE['nome'] !="" && $_COOKIE['senha'] !=""){
// faz a conexão com o banco de dados
//
//
//    $smt = $conn->prepare("Select * from usuario where usuario= ? and senha = ?");
//    $smt->bindParam(1, $_POST['nome'], PDO::PARAM_STR);
//    $smt->bindParam(2, $senha, PDO::PARAM_STR);
//    $smt->execute();
//    $obj = $smt->fetch(PDO::FETCH_ASSOC);
//
//}else{
//    echo "não deixe de preencher os campos";
//}
//
//if ($obj) //se o nome e senha coincidirem a sessão é criada
//{
//    $_SESSION['nome']= $_COOKIE['nome'];
//    $_SESSION['senha']= $_COOKIE['senha'];
//
//    header('location: /central_admin/central_adm.php');
//}
//else //caso não coincida o usuário e senha, vai para a página de erro
//{
//    echo "<a href='/login/login.php'><li>retornar ao login</li>";
//}
?>
