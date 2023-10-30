<?php
include_once ("conexao.php");
include_once("response.php");
?>

<?php
if(isset( $_POST['cadastrar'])) {
    //refatorar
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    
    $senhaValida = isset($_POST['$senha']) ? $_POST['$senha'] : "";
    $loginValido = isset($_POST['$login']) ? $_POST['$login'] : "";

    if ($senhaValida=='' && $loginValido== '') {
         response(true, "Dados de acesso inválidos.");
        }
        
    $query = "insert into usuario(login,senha) values(:login,:senha)";
    $result = $connection ->prepare($query);
    $result->bindParam(":login", $login, PDO::PARAM_STR);
    $result->bindParam(":senha", $senha, PDO::PARAM_STR);
    $result->execute();
    
        if ($result->rowCount() == 1) {
            $row = $result->fetch(PDO::FETCH_ASSOC);
            $_SESSION['msg'] = "<p style='color:#00FF00'>Usuário inserido com sucesso.</p>";
        }else {
            $_SESSION['msg'] = "<p style='color:#ff0000'>Usuário não foi inserido, tente mais tarde.</p>";
        }
    }
?>