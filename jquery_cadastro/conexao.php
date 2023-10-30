<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'empresa';
    $port = '3311';
try {
    $connection = new PDO("mysql:host=$host;port=$port;dbname=$db", $user, $pass);
    //echo"Conexão realizada com sucesso";
} catch (PDOException $e) {
    echo "Erro de conexão com banco ". $e->getMessage();
}



