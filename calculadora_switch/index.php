<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora PHP</title>
</head>
<body>

    <?php if(isset($_GET["total"]))
    {
        echo "Resultado: ".$_GET["total"]."<br><br>";
        }  
        ?>
    <form action="calcular.php" method="post">
        <label for="n1">
            Número 1:
            <input type="text" name="n1">
        </label>
        <br><br>
        <label for="n2">
            Número 2:
            <input type="text" name="n2">
        </label>
        <br><br>
        Operações: <br>
        <label>
            <input type="radio" name="operacao" value="somar">
            Somar
        </label>
        <label >
            <input type="radio" name="operacao" value="subtrair">
            Subtrair
        </label>
        <label >
            <input type="radio" name="operacao" value="dividir">
            Dividir
        </label>
        <label>
            <input type="radio" name="operacao" value="multiplicar">
            Multiplicar
        </label>
        <br><br>
        <input type="submit" value="Calcular">
        <input type="reset" value="Limpar">

    </form>
    
</body>
</html>