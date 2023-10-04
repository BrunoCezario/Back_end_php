<?php
if (isset($_SESSION['msg'])) {
  echo $_SESSION['msg'];
  unset($_SESSION['msg']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.css" rel="stylesheet">
    <title>TELA PRINCIPAL</title>
</head>
<body>
    <h1>USUÁRIO</h1>
    <form method="post" id="form_usuario">
        <label>Login</label>
        <input type="text" name="login" placeholder="Digite o usuário">
        <br/>
        <br/>
        <label>Senha</label>
        <input type="password" name="senha" placeholder="Digite sua senha">
        <br/>
        <br/>
        <div>
        <button type="submit"  name="acessar" >ACESSAR</button>
        <!-- <button name="cadastrar">CADASTRAR</button> -->
        </div>
    </form>
    <div class="modal fade" id="modal" data-bs-keyboard="false" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>
    
    <script src="usuario.js"></script>
    <script src="bootstrap.js"></script>
    <script src="jquery.js"></script>

</body>

</html>