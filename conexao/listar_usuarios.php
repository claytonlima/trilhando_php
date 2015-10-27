<?php

function listaUsuarios(){

    require_once "conexao.php";
    $conn = conexao();

    $smt = $conn->prepare("Select * from usuario");
    $smt->execute();
    return $usuarios = $smt->fetchAll(PDO::FETCH_ASSOC);
}

function delete(){



}

function add(){


}

function alter(){



}

