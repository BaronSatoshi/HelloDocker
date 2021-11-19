<?php

//Conexão MySQL 
/*$host = "mysql";
$username = "root";
$password = "root";
$banco = "teste";

$conexao = new mysqli($host, $username, $password, $banco);*/

//Conexão MySQL utilizando a extensão PDO do PHP
try{
    $conn = new PDO('mysql:host=mysql;dbname=teste', 'root', 'root');
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
        echo 'Error: ' . $e->getMessage();
}



?>