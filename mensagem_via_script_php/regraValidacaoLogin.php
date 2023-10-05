<?php
function validaSenha()
{
    if (isset($_POST['senha'])) {
        if ($_POST['senha'] == 11111) {
            echo  '<script>alert("Muito bem senha VÁLIDA!")</script>';
        } else {
            echo  '<script>alert("TENTE NOVAMENTE SENHA INVÁLIDA")</script>';
        }
    }
}
