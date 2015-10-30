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
          PRIMARY KEY (id_usuario));
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
//
//    $paginas = array();
//
//    $paginas[] = array('pagina'=>'Home', 'conteudo'=>'Belissima Home', 'link'=>'\home');
//    $paginas[] = array('pagina'=>'Empresa', 'conteudo'=>'Otima Empresa', 'link'=>'\conteudo');
//    $paginas[] = array('pagina'=>'Produtos', 'conteudo'=>'Otimos Produtos', 'link'=>'\Produtos');
//    $paginas[] = array('pagina'=>'Servicos', 'conteudo'=>'Otimos Servicos', 'link'=>'\servicos');
//    $paginas[] = array('pagina'=>'Contato', 'conteudo'=>'Entre em Contato', 'link'=>'\contato');
//
//    foreach ($paginas as $pagina) {
//
//        $pg = $pagina['pagina'];
//        $ct = $pagina['conteudo'];
//        $lk = $pagina['link'];
$usuario = "admin";
$senha =password_hash("12345",PASSWORD_DEFAULT);
$smt = $conn->prepare("INSERT INTO usuario_teste (usuario,senha) VALUES (:usuario,:senha);");
$smt->bindParam(":usuario", $usuario);
$smt->bindParam(":senha", $senha);
$smt->execute();
$cadastrados ++;
//}
echo "USUÁRIO criado no banco $usuario \n";
echo "SENHA criada no banco $senha \n";
echo "Usuário cadastrado: $cadastrados";
echo " - Dados inseridos OK \n";

echo "### Criação e Inserção na tabela concluído ###\n\n";


