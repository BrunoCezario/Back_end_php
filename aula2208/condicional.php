<?php 
  $menor = $_GET['numero1'];
  $meio = $_GET['numero2'];
  $maior = $_GET['numero3'];

  if($meio < $menor){
   $temp=$menor;
   $menor=$meio;
   $meio=$temp;
  }
  
  if($maior < $menor){
   $temp=$menor;
   $menor=$maior;
   $maior=$temp;
  }
  
  if($maior < $meio){
   $temp=$meio;
   $meio=$maior;
   $maior=$temp;
  }
  
  echo "$menor < $meio < $maior";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio estrutura condicional</title>
</head>
<body>
<form action="" method="get">
  Numero 1:  <input type="text" name="numero1" /><br />
  Numero 2:  <input type="text" name="numero2" /><br />
  Numero 3:  <input type="text" name="numero3" /><br />
  <input type="submit" name="submit" value="Testar" />
 </form> 
</body>
</html>

 
 
