<?php
require_once "conexao.php";
echo "#### Executando Consulta ####\n";

$conn = conexao();

echo "Consultando Tabela";
$conn->query("SELECT pagina,link_pagina,conteudo FROM paginas where conteudo LIKE %belissimo%;");

echo "#### Concluído ####\n";