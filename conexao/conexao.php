<?php
 try{
     $conexão = new \PDO("mysql:host=localhost;dbname=codephp","root","850702");
}catch (\PharException $e){
     die("Erro código: ".$e->getCode().": ".$e->getMessage());
 }
