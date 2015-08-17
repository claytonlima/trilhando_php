<div class="jumbotron">
    <h3 align="center">Resultado de pesquisa</h3>
</div>

<?php
include "../conexao/conexao.php";

$conn = conexao();
$pesquisar = $_POST['pesquisar'];

$consulta = $conn->prepare("SELECT pagina,link_pagina,conteudo FROM paginas where conteudo LIKE :pesquisa");
$pesquisar_sql = "%".$pesquisar."%";
$consulta->bindValue(':pesquisa', $pesquisar_sql);
$consulta->execute();

foreach($consulta as $reg):
echo '<td><a href="'.$reg['link_pagina'].'">'.$reg['pagina'].'</a></td><br>';
echo  '<p>'.$reg['conteudo'].'</p>';
endforeach;

?>






