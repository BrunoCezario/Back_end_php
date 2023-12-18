<?php
include_once("conexao.php");
// Cria o mesmo cookie acima só que irá durar cinco dias
//setcookie('afiliado', '1569', (time() + (5 * 24 * 3600)));
// Cria o novo cookie para durar seis horas
//setcookie('nome', 'Maria', (time() + (6 * 3600)));
// function dataNascimento(){
//     echo("<script type='text/javascript'> var resposta 
//     = prompt('informe sua data de nascimento'); </script>");

//     $resposta = "<script type='text/javascript'> document.write(resposta); </script>";
//     return($resposta);
// 
}

$randon = mt_rand(1,3);
function perguntasAleatorias($randon){
 
    if($randon == 1){   
        echo("<script type='text/javascript'>  var resposta 
    = prompt('Informe sua idade.'); </script>");

    }else if($randon == 2){
        echo("<script type='text/javascript'>  var resposta 
        = prompt('Informe Quantidade de Filhos.'); </script>");
   }else if($randon == 3){
        echo("<script type='text/javascript'>  var resposta 
        = prompt('Informe seu Documento.'); </script>");
    }

    $resposta = "<script type='text/javascript'> document.write(resposta); </script>";
    return($resposta);
}



if (isset( $_POST['acessar'])) {


        $login = $_POST['login'];
        $senha = $_POST['senha'];

        if(isset($login) || isset($senha)) {
            echo("<script type='text/javascript'>
            alert('Erro ao se autenticar , tente novamente'); </script>");
            die();
        }

          
        $query = "select login from usuario where login=:login";
        $result = $connection ->prepare($query);
        $result->bindParam(":login", $login, PDO::PARAM_STR);
        $result->execute();

        if ($result->rowCount() !=0) {
                    
            $respostaLogin = perguntasAleatorias($randon);
              

            if ($randon==1) {

                $consulta = "select * from usuario where login=:login
                and idade=:resposta";
                $r = $connection ->prepare($consulta);
                $r->bindParam(":resposta", $respostaLogin, PDO::PARAM_STR);
                $r->bindParam(":login", $login, PDO::PARAM_STR);
                $r->execute();
               

            }elseif ($randon == 2) {
                $consulta = "select * from usuario where login=:login
                and qtd_filhos=:resposta";
                $r = $connection ->prepare($consulta);
                $r->bindParam(":resposta", $respostaLogin, PDO::PARAM_STR);
                $r->bindParam(":login", $login, PDO::PARAM_STR);
                $r->execute();
                
            }else if ($randon == 3) {
                $consulta = "select * from usuario where login=:login
                and documento=:resposta";
                $r = $connection ->prepare($consulta);
                $r->bindParam(":resposta", $respostaLogin, PDO::PARAM_STR);
                $r->bindParam(":login", $login, PDO::PARAM_STR);
                $r->execute();
         
               
            }
            
            if ($r->fetchAll(PDO::FETCH_ASSOC) ==0) {
                echo("<script type='text/javascript'>
                alert('Erro ao se autenticar , tente novamente'); </script>");
                die();
            }else {
                      header("refresh:0.1;logado.php");
            }
            
        }else{
            echo("<script type='text/javascript'>
             alert('Erro ao se autenticar , tente novamente'); </script>");
             die();
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