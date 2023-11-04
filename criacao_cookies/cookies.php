<?php
include_once("conexao.php");
// Cria o mesmo cookie acima só que irá durar cinco dias
//setcookie('afiliado', '1569', (time() + (5 * 24 * 3600)));
// Cria o novo cookie para durar seis horas
//setcookie('nome', 'Maria', (time() + (6 * 3600)));


if (isset( $_POST['acessar'])) {
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        setcookie("login",$login); 
   
        $query = "select login from usuario where login=:login";
        $result = $connection ->prepare($query);
        $result->bindParam(":login", $login, PDO::PARAM_STR);
        $result->execute();
        
            if ($result->rowCount() !=0) {
                $row = $result->fetch(PDO::FETCH_ASSOC);
               echo"Usuário logado com sucesso.";

               header("Location: logado.php");
         
            }else{

                echo"Usuário inválido.";
            }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<div>
        <h1>Login</h1>
        <form action="" method="POST">
            <input type="text" name="login" placeholder="login">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="acessar" value="ACESSAR">
        </form>
    </div>
</body>
</html>