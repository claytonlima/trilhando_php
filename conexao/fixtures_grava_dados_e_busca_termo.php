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

echo "Inserindo os dados Página, Conteúdo e Link da página";
for($x=0; $x<=5; $x++){

    $pagina =['home','Empresa','servicos','produtos'];
    $conteudo ="Veja esta pagina belissima";
    $link_pagina ="/home";

        $smt = $conn->prepare("INSERT INTO pagina_teste (pagina,conteudo,link_pagina) VALUES (:pagina,:conteudo,:link_pagina);");
        $smt->bindParam(":pagina", $pagina);
        $smt->bindParam(":conteudo", $conteudo);
        $smt->bindParam(":link_pagina", $link_pagina);
        $smt->execute();
}
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
