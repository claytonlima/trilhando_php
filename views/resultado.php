<?php
include "../conexao/conexao.php";

$conn = conexao();
echo "#### Pesquisa na tabela #### <br><br>";
$pesquisar = $_POST['pesquisar'];


$resultado = $conn->query("SELECT nome FROM usuario where nome LIKE '%".$pesquisar."%'");
foreach($resultado as $reg):
    echo "Nome:" .$reg['nome']. "<br><br>";
endforeach;
?>
<div class="jumbotron">
    <h3 align="center">Resultado de pesquisa</h3>
</div>


