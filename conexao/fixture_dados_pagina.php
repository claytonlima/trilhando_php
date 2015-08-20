<?php
require_once "conexao.php";
echo "#### Executando Fixture ####\n";

$conn = conexao();

echo "Removendo Tabela";
$conn->query("DROP TABLE IF EXISTS conteudoteste;");
echo " - OK\n";

echo "Criando a Tabela";
$conn->query(" CREATE TABLE pagina_teste(
          id_pagina   INT NOT NULL AUTO_INCREMENT,
          pagina VARCHAR (45) CHARACTER SET 'utf8' NULL,
          conteudo VARCHAR (45) CHARACTER SET 'utf8' NULL,
          link_pagina  VARCHAR (45) CHARACTER SET 'utf8' NULL,
          PRIMARY KEY (id_pagina));
");
echo " - OK\n";

echo "Inserindo os dados Página, Conteúdo e Link da página";
for($x=0; $x<=9; $x++){

    $pagina ="home";
    $conteudo ="Veja está página belissima";
    $link_pagina ="/home";

        $smt = $conn->prepare("INSERT INTO pagina_teste (pagina,conteudo,link_pagina) VALUES (:pagina,:conteudo,:link_pagina);");
        $smt->bindParam(":pagina", $pagina);
        $smt->bindParam(":conteudo", $conteudo);
        $smt->bindParam(":link_pagina", $link_pagina);
    $smt->execute();
}
echo "#### Inserção concluída ####\n";

echo "#### Concluído ####\n";