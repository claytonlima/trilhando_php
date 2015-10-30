<?php

function listarPaginas(){
    require_once "conexao.php";
    $conn = conexao();

    $smt = $conn->prepare("Select * from paginas");
    $smt->execute();
    return $paginas = $smt->fetchAll(PDO::FETCH_ASSOC);
}

function del($id){
    $conn = conexao();

    $smt = $conn->prepare("DELETE * from paginas WHERE id_pagina = id_pagina");
    $smt->bindParam(":id_pagina", $id);


    if($smt->execute()){
        return true;
    }

}

