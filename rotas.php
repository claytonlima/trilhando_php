<?php
function rotas(){
    $uri = array(empresa=>empresa.php,
                 produtos=>produtos.php,
                 servicos=>servicos.php,
                 contato=>contato.php
                  );
    echo var_dump($uri);
}