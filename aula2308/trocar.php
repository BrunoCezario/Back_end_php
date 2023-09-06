<?php

$resultado='';

if(isset($_POST['submit'])){

    $variavel= $_POST['nome'];
    $estado = $variavel;

switch($estado){
case 'A':
    $resultado = 'Ana';
    break;
case 'B':
    $resultado ='Bruno';
    break;    
case 'C':
    $resultado ='Caio';
    break;

default:
$resultado ='Qualquer'.'Um';
    break;
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Switch</title>
    <link rel="stylesheet" type="text/css" href="home.css"/>
</head>

<body>
<form action="" method="post">
    <div>
    <label></label>letra do nome</label>
    <input type="text" name="nome" maxlength="1">
    </div> 
    <br/> 
    <div>
    <label>Resultado:</label> 
    <input type="text" name="resultado" value=<?php echo $resultado?>>
    </div>
    <br/> 
    <div>
        <input type="submit" name='submit' value="enviar"> 
    </div>  
</form> 
</body>
</html>