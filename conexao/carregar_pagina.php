<?php

function carregarPagina($id)
{
    require_once "../conexao/conexao.php";
    $conn = conexao();

    $smt = $conn->prepare("Select * from paginas WHERE id_pagina = :id_pagina");
    $smt->bindParam(":id_pagina", $id);
    $smt->execute();
    return $resultado = $paginas = $smt->fetch(PDO::FETCH_ASSOC);
}