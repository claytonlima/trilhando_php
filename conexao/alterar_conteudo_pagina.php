<?php
$id_pagina = $_POST['id_pagina'];
$pagina = $_POST['pagina'];
$conteudo = $_POST['conteudo'];
$link_pagina = $_POST['link_pagina'];

if($id_pagina != "" && $pagina != "" && $conteudo != "" && $link_pagina != "") {
    // faz a conexão com o banco de dados

    require_once "conexao.php";
    $conn = conexao();
    $smt = $conn->prepare(" UPDATE paginas SET pagina = :pagina , conteudo = :conteudo, link_pagina = :link_pagina WHERE id_pagina = :id");

    $smt->bindParam(":id", $id_pagina);
    $smt->bindParam(":pagina", $pagina);
    $smt->bindParam(":conteudo", $conteudo);
    $smt->bindParam(":link_pagina", $link_pagina);
    $smt->execute(array(
        ':id' => $id_pagina,
        ':pagina' => $pagina,
        ':conteudo' => $conteudo,
        ':link_pagina' => $link_pagina
    ));
    $obj = $smt->fetch(PDO::FETCH_ASSOC);
    $count = $smt->rowCount();

if($count > 0){
    header('location:../paginas/paginas_cadastradas.php');
    echo "Produto alterado com sucesso";
}else{
    echo "Nenhuma foi alterada";
}


}