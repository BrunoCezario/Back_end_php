<?php

if (isset($_POST['submit'])) {
}
 
$resultado="";

if(isset($_GET['nome'])){

    //print_r('nome vazio');
    $variavel= $_GET['nome'];
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
    <title>cadastro</title>
    <link rel="stylesheet" type="text/css" href="home.css"/>
</head>

<body>
<form action="" method="get">
    <div>
    <label></label>Nome completo</label>
    <input type="text" name="nome">
    </div> 
    <br/> 
    <div>
    CPF</label>
    <input type="text"  name="cpf">
    </div>
    <br/> 
    <div>
    <label>Resultado:</label> 
    <input type="text" name="resultado" value=<?php echo $resultado?>>
    </div>
    <br/> 
    <div>
        <input type="submit" value="cadastrar"> 
    </div>  
</form> 
</body>
</html>