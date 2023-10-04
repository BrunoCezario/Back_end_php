<?php
include_once ("conexao.php");
include_once("response.php");


//if (isset( $_POST['acessar'])) {
//refatorar
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $senhaValida = isset($_POST['$senha']) ? $_POST['$senha'] : "";
    $loginValido = isset($_POST['$login']) ? $_POST['$login'] : "";

        if ($senhaValida=='' && $loginValido== '') {
            response(true, "Dados de acesso inválidos.");
        }

    $query = "select login,senha from usuario where login=:login";
    $result = $connection ->prepare($query);
    $result->bindParam(":login", $login, PDO::PARAM_STR);
    $result->execute();
    
        if ($result->rowCount() !=0) {
            $row = $result->fetch(PDO::FETCH_ASSOC);
            echo"Usuário logado com sucesso.";
        }else {
            $_SESSION['msg'] = "<p style='color:#ff0000'>Usuário não encontrado.</p>";
        }
//}
?>