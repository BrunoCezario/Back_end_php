

<?php
//retirar para classes include exercicio
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
///////AÇÕES DO BOTÃO PESQUISAR ###################################
if (isset( $_POST['pesquisar'])) {
   
if ($_POST['login']) {
    $query = "SELECT * FROM usuario WHERE login=:login";
    $select = $connection ->prepare($query);
    $select->bindParam(":login", $_POST['login'], PDO::PARAM_STR);
    $select->execute();
    $row = $select->fetch(PDO::FETCH_ASSOC);

}else{
    $query = "SELECT * FROM usuario";
    $select = $connection ->prepare($query);
    $select->execute();
    $rows = $select->fetchAll(PDO::FETCH_ASSOC); 
   
}
}    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TELA PRINCIPAL</title>
</head>
<body>
 <h1>Pesquisar Usuário</h1>
    <form method="post">
        <label>Login</label>
        <input type="text" name="login" placeholder="Digite o usuário">
        <br/>
        <br/>
        <button  name="pesquisar">PESQUISAR</button>
       </div>
       <br/>
       <br/>
        <?php 
        if (isset( $_POST['pesquisar'])) {
            //fazer a pesquisa quando não encontrar pois esta com este erro.
            if(isset($row)){
                echo "<h1> " . "ID: " .$row['id'] . " - "."Login: " .$row['login']."<h1> ". "<br/>";   
            }else{
                foreach ($rows as $usuario) { 
                   
                    echo"<h1> " . "ID: " .$usuario['id'] . " - "."Login: " .$usuario['login']."</h1> ". "<br/>";
                   
                }   
            }
        } ?>
 </form>
</body>

</html>

