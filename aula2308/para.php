<?php
$resultado='';
if(isset($_POST['submit'])){
 $produtos[0] = "Microsystem";
 $produtos[1] = "Impressora";
 $produtos[2] = "Scanner";
 $produtos[3] = "Computdor";
 $produtos[4] = "Scanner";
 $produtos[5] = "mouse";
 for ($indiceprod=0; $indiceprod<=5; $indiceprod++) {
    echo '<textarea>Produto de índice '. $indiceprod.':' . $produtos[$indiceprod].'</textarea>';
 }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de For</title>
    <link rel="stylesheet" type="text/css" href="home.css"/>
</head>

<body>
<form action="" method="post">
   
    <div>
        <input type="submit" name='submit' value="Enviar Produtos"> 
    </div>  
</form> 
</body>
</html>