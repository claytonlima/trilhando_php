<?php
 try{
     $conexao = new \PDO("mysql:host=localhost;dbname=codephp","root","850702");
}catch (\PharException $e){
     die("Erro código: ".$e->getCode().": ".$e->getMessage());
 }

$sql = "SELECT * from usuario";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($usuario as $usuarios){
echo $usuarios['nome']." - ".$usuarios['email']."<br>";
}