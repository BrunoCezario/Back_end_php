<?php
include'calculo.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/padrao.css"/>
    <title>Função soma cinco</title>
</head>
<body>
    <form action="" method="post" class="box">
    <div >
    <label>Insira um valor aqui</label>
    <input type="text" name="valor" required>
    </div>
    <br>
    <div>
    <label class="">O valor mais cinco</label>
    <input  type="text" name="valorSomado" value=<?php echo valorMaisCinco(); ?>>
    </div>
    <br>
    <div>
    <button id="submit"> calcular</button>
    </div>
     </form>
</body>
</html>