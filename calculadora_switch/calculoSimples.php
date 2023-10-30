<html>
 <head>
  <title>Curso PHP Progressivo</title>
 </head>
 <body>
   <form   action="home.php" method="get">
 Numero 1: <input type="text" name="num1"><br>
 Numero 2: <input type="text" name="num2"><br>
 <input type="submit">
   </form>
 
   <?php 
 $num1 = $_GET['num1'];
 $num2 = $_GET['num2'];
 echo "Soma         : ","$num1+$num2 = ",$num1+$num2, "<br />";
 echo "Subtração        : ","$num1-$num2 = ",$num1-$num2, "<br />";
 echo "Multiplicação    : ","$num1*$num2 = ",$num1*$num2, "<br />";
 echo "Divisão         : ","$num1/$num2 = ",$num1/$num2, "<br />";
 echo "Resto da divisão : ","$num1%$num2 = ",$num1%$num2, "<br />";
   ?>
 </body>
</html>
