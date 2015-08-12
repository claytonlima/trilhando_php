<?php
function rotas(){
    $rotas = parse_url("http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]);
    $path = str_replace("/","",$rotas["path"]);
    $uri = array(
                'home' =>'views/home.php',
                'empresa'=>'views/empresa.php',
                'produtos'=>'views/produtos.php',
                'servicos'=>'views/servicos.php',
                'contato'=>'views/contato.php',
                'mensagem_retorno'=>'mensagem_retorno.php'
    );
    var_dump($uri);
    if (array_key_exists($path,$uri)) {
        return $uri[$path];
    } else {
         return "erros/404.php";
    }

}