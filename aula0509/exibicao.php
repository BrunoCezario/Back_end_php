<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório do cadastro</title>
</head>
<body>
<?php



if (isset($_POST['enviar'])) {
  
    foreach ($_POST as $key => $value) {
        if ($key<>'locomocao') {
            echo "$key: $value <br>";
        }
          
    }

    foreach ($_POST['locomocao'] as $key => $value) {
        echo "$key: $value <br>";
     }
}


?> 
</body>
</html>
