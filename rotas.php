<?php
include_once "conexao/conexao.php";

function rotas()
{
    $rotas = parse_url("http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    $path = str_replace("/", "", $rotas["path"]);

    $uri = array(
        '' => 'views/home.php',
        'home' => 'views/home.php',
        'empresa' => 'views/empresa.php',
        'produtos' => 'views/produtos.php',
        'servicos' => 'views/servicos.php',
        'resultado' => 'views/servicos.php',
        'contato' => 'views/contato.php'
    );

    if (array_key_exists($path, $uri)) {
        return $uri[$path];
    } else {
        return "erros/404.php";
    }
}

function paginaAtual(){
    $path = $_SERVER["REQUEST_URI"];

    return $path;
}

function conteudo(){
    $conn = conexao();

    $consulta = $conn->prepare("SELECT pagina,conteudo,link_pagina FROM paginas");
    $consulta->execute();

    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        $titulo[$linha['link_pagina']]['conteudo'] = strip_tags($linha['conteudo']);
        $titulo[$linha['link_pagina']]['pagina'] = strip_tags($linha['pagina']);
    }
    return $titulo;
}























