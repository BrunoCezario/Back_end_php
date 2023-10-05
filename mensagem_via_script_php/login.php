<?php
include 'regraValidacaoLogin.php';
 
 validaSenha()
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/padrao.css" />
    <title>Exercicio Login </title>
</head>

<body>
    <form action="" method="post" class="box">
        <div>
            <label>LOGIN</label>
            <input type="text" name="login" maxlength="10" required>
        </div>
        <br>
        <div>
            <label class="">SENHA</label>
            <input type="text" name="senha" maxlength="5" required 
           >
        </div>
        <br>
        <div>
            <button id="submit" name='entrar'> ENTRAR</button>
        </div>
    </form>
</body>

</html>