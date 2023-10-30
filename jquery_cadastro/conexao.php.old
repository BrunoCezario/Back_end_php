<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de Conexão</title>
</head>
<body>
    <form action="" method="post">
        <button name="enviar"> ENVIAR</button>
    </form>
</body>
</html>

<?php 

try {
    
    if (isset($_POST['enviar'])) {
    # code...
    $host="localhost";
    $port=3311;
    $socket="";
    $user="root";
    $password="";
    $dbname="locadora";
    
    $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ("<script language='JavaScript'>alert('Sem conexão com o banco 
    de dados.Tente mais tarde.')</script>"
    . mysqli_connect_error());
    
    //echo "A CONEXÃO FOI UM SUCESSO";

    $query = "SELECT id, nome, valor FROM carro";
        
    $result = mysqli_query($con,$query);

    if($result){
  
          while($row = mysqli_fetch_array($result)) { 
       //print " Coluna1: $consulta[nome] - Coluna2: $consulta[valor]<br>"; 
            $id = $row["id"];
            $nome= $row["nome"];
            $valor = $row["valor"];

        echo"<br/>";
        echo "ID: ". $id.  "Nome: ".$nome.    "Valor: ".$valor.  "<br/>";
          } 
    }

  
        mysqli_free_result($result); 
        mysqli_close($con); 
   

    }
} catch (\Throwable $th) {
    throw $th;
    //echo"Erro na consulta ao banco de dados";
}
    
    


?>