<?php
require_once "conexao.php";
echo "#### Executando Fixture ####\n";

$conn = conexao();

echo "Removendo Tabela";
$conn->query("DROP TABLE IF EXISTS teste;");
echo " - OK\n";

echo "Criando a Tabela";
$conn->query(" CREATE TABLE teste(
          id   INT NOT NULL AUTO_INCREMENT,
          nome VARCHAR (45) CHARACTER SET 'utf8' NULL,
          PRIMARY KEY (id));
");
echo " - OK\n";

echo "Inserindo os dados";
for($x=0; $x<=9; $x++){

    $nome ="Teste teste {$x}";

    $smt = $conn->prepare("INSERT INTO teste(nome) VALUE (:nome);");
    $smt->bindParam(":nome", $nome);
    $smt->execute();
}
echo " - OK\n";

echo "#### Concluído ####\n";