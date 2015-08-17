<div class="jumbotron">
    <h3 align="center">Resultado de pesquisa</h3>
    <?php
    include "../conexao/conexao.php";

    $conn = conexao();
    echo "#### Pesquisa na tabela #### <br><br>";
    $pesquisar = $_POST['pesquisar'];


    $sql = ("SELECT nome FROM usuario where nome LIKE '%".$pesquisar."%'");
    $stm = $conn->prepare($sql);
    $stm->execute();
    $resultado  = $stm->fetchAll();

    foreach($resultado as $reg):
        echo "Nome:" .$reg['nome']. "<br><br>";
    endforeach;
    ?>
</div>





