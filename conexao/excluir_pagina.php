<?php
require_once "conexao.php";

$id = $_GET['id'];

    $conn = conexao();

    $smt = $conn->prepare("DELETE from paginas WHERE id_pagina = :id");
    $smt->bindParam(":id", $id);
    if($smt->execute()){
        header('location:../paginas/paginas_cadastradas.php');
    }else{
        echo "Não consegui deletar a página";

}
