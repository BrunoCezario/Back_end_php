<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '123456';
    $dbName = 'aula1508';
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if($conexao->connect_errno)
     {
         echo "Erro";
     }
     else
     {
         echo "Conexão efetuada com sucesso";
     }

?>