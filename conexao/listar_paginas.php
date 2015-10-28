<?php
function listarPaginas(){
    require_once "conexao.php";
    $conn = conexao();

    $smt = $conn->prepare("Select * from paginas");
    $smt->execute();
    return $paginas = $smt->fetchAll(PDO::FETCH_ASSOC);
}


