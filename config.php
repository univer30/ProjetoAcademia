<?php
try{
    $pdo = new PDO("mysql:dbname=academia;host=localhost:3306" , "root", "aula");
}catch(PDOException $e){
    echo "ERRO:".$e->getMessage();
    exit;
}
