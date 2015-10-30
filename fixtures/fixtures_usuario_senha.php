<?php
require_once "../conexao/conexao.php";
echo "#### Executando Fixture ####\n\n";

$conn = conexao();

echo "Removendo Tabela";
$conn->query("DROP TABLE IF EXISTS usuario_teste;");
echo " - Remoção de tabela OK\n\n";

echo "Criando a Tabela";
$conn->query(" CREATE TABLE usuario_teste(
          id_usuario   INT NOT NULL AUTO_INCREMENT,
          usuario VARCHAR (45) CHARACTER SET 'utf8' NULL,
          senha VARCHAR (45) CHARACTER SET 'utf8' NULL,
          role VARCHAR (20) CHARACTER SET 'utf8' NULL,
          PRIMARY KEY (id_usuario));
");
echo " - Tabela criada OK\n";

echo "Inserindo os dados Página, Conteúdo e Link da página\n";


$cadastrados = 0;


$usuario = "clayton";
$role = "admin";
$senha =password_hash("12345",PASSWORD_DEFAULT);
$smt = $conn->prepare("INSERT INTO usuario_teste (usuario,senha,role) VALUES (:usuario,:senha,:role);");
$smt->bindParam(":usuario", $usuario);
$smt->bindParam(":senha", $senha);
$smt->bindParam(":role", $senha);
$smt->execute();
$cadastrados ++;
//}
echo "USUÁRIO criado no banco $usuario \n";
echo "SENHA criada no banco $senha \n";
echo "Usuário cadastrado: $cadastrados";
echo " - Dados inseridos OK \n";

echo "### Criação e Inserção na tabela concluído ###\n\n";


