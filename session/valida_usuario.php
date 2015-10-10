<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
session_start();
$nome = $_POST['nome'];
$senha = $_POST['senha'];

// faz a conexão com o banco de dados
require_once "/conexao/conexao.php";
 mysql_select_db('site_estudos');
 $consulta="Select * from cadastro_usuario where nome='" . $_POST['nome'] . "' and senha='" . $_POST['senha'] . "'";
 $resultado=mysql_query($consulta);
 if (mysql_num_rows($resultado)>0) //se o nome e senha coincidirem a sessão é criada 
{
$_SESSION['nome']= $nome;
$_SESSION['senha']= $senha;
header('location: central_adm.php');
}
else //caso não coincida o usuário e senha, vai para a página de erro
{  
	echo "Usuário inválido....<br><br>";
    echo "Senha inválida....<br><br>";
}
?>
<a href="lista_produtos.php">Voltar para o login e tentar novamente</a>