<?php
session_start();
?>
<meta charset="utf-8">

<?php
$pagina = $_POST['pagina'];
$conteudo = $_POST['conteudo'];
$linkPagina = $_POST['link_pagina'];
if($pagina != "" && $conteudo != "" && $linkPagina != "" ){



    // faz a conexão com o banco de dados
    require_once "conexao.php";
    $conn = conexao();

    $smt = $conn->prepare("INSERT INTO paginas (pagina,conteudo,link_pagina) VALUES (:pagina,:conteudo,:link_pagina);");
    $smt->bindParam(":pagina", $pagina);
    $smt->bindParam(":conteudo", $conteudo);
    $smt->bindParam(":link_pagina", $linkPagina);

    $certo = $smt->execute(array(':pagina'=>$pagina,
                                 ':conteudo'=>$conteudo,
                                  ':link_pagina'=>$linkPagina));
    //ver porque não caiu no no primeiro if
    $obj = $smt->fetch(PDO::FETCH_ASSOC);
    $count = $smt->rowCount();


}

if ($count > 0) //se o nome e senha coincidirem a sessão é criada
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
