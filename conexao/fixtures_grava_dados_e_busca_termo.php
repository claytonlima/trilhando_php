<?php
require_once "conexao.php";
echo "#### Executando Fixture ####\n\n";

$conn = conexao();

echo "Removendo Tabela";
$conn->query("DROP TABLE IF EXISTS pagina_teste;");
echo " - Remoção de tabela OK\n\n";

echo "Criando a Tabela";
$conn->query(" CREATE TABLE pagina_teste(
          id_pagina   INT NOT NULL AUTO_INCREMENT,
          pagina VARCHAR (45) CHARACTER SET 'utf8' NULL,
          conteudo VARCHAR (45) CHARACTER SET 'utf8' NULL,
          link_pagina  VARCHAR (45) CHARACTER SET 'utf8' NULL,
          PRIMARY KEY (id_pagina));
");
echo " - Tabela criada OK\n";

echo "Inserindo os dados Página, Conteúdo e Link da página\n";


$cadastrados = 0;

//    $paginas = array();
//    $paginas[] =['pagina'=>'Home','conteudo'=>'Belissima Home','link_pagina'=>'\home'];
//    $paginas[] =['pagina'=>'Empresa','conteudo'=>'Otima Empresa','link_pagina'=>'\conteudo'];
//    $paginas[] =['pagina'=>'Produtos','conteudo'=>'Ótimos Produtos','link_pagina'=>'\Produtos'];
//    $paginas[] =['pagina'=>'Servicos','conteudo'=>'Ótimos Serviços','link_pagina'=>'\servicos'];
//    $paginas[] =['pagina'=>'Contato','conteudo'=>'Entre em Contato','link_pagina'=>'\contato'];


    $paginas = array();

    $paginas[] = array('pagina'=>'home', 'conteudo'=>'Belissima Home', 'link'=>'\home');
    $paginas[] = array('pagina'=>'home', 'conteudo'=>'Otima Empresa', 'link'=>'\conteudo');
    $paginas[] = array('pagina'=>'home', 'conteudo'=>'Otimos Produtos', 'link'=>'\Produtos');
    $paginas[] = array('pagina'=>'home', 'conteudo'=>'Otimos Servicos', 'link'=>'\servicos');
    $paginas[] = array('pagina'=>'home', 'conteudo'=>'Entre em Contato', 'link'=>'\contato');

    foreach ($paginas as $pagina) {

        $pg = $pagina['pagina'];
        $ct = $pagina['conteudo'];
        $lk = $pagina['link'];

        $smt = $conn->prepare("INSERT INTO pagina_teste (pagina,conteudo,link_pagina) VALUES (:pagina,:conteudo,:link_pagina);");
        $smt->bindParam(":pagina", $pg);
        $smt->bindParam(":conteudo", $ct);
        $smt->bindParam(":link_pagina", $lk);

        $smt->execute();
        $cadastrados++;
    }
echo 'Páginas cadastradas: ' . $cadastrados;
echo " - Dados inseridos OK\n";

echo "### Criação e Inserção na tabela concluída ###\n\n";

echo "Fazendo Busca de conteúdo";

        $pagina_busca = "%veja%";
        $smt = $conn->prepare("SELECT conteudo from pagina_teste where conteudo LIKE :termo");
        $smt->bindParam(":termo",$pagina_busca);
        $smt->execute();

echo " - Busca Concluída OK\n";
echo "### Busca Concluída ###\n\n";


echo "### Rotina de inserção e busca teste Concluida ###\n\n";
