<?php
session_start();
require_once "conexao.php";
$nome = $_POST['nome'];
$senha = $_POST['senha'];


$_COOKIE['nome']  = $nome;
$_COOKIE['senha']  = $senha;

if($_COOKIE['nome'] !="" && $_COOKIE['senha'] !=""){
    // faz a conexão com o banco de dados
    $conn = conexao();

    $smt = $conn->prepare("Select * from usuario where nome= ? and senha = ?");
    $smt->bindParam(1, $_POST['nome'], PDO::PARAM_STR);
    $smt->bindParam(2, $_POST['senha'], PDO::PARAM_STR);
    $smt->execute();
    $obj = $smt->fetchObject();

}else{
    echo "não deixe de preencher os campos";
}

if ($obj) //se o nome e senha coincidirem a sessão é criada
{
    $_SESSION['nome']= $_COOKIE['nome'];
    $_SESSION['senha']= $_COOKIE['senha'];
    header('location: /central_admin/central_admin.php');
}
else //caso não coincida o usuário e senha, vai para a página de erro
{
    echo "Usuário inválido....<br><br>";
    echo "Senha inválida....<br><br>";
}
?>
