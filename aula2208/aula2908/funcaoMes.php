<?php
function nomeMes()
{
    if (isset($_POST['mes'])) {

        switch ($_POST['mes']) {
            case 1:
                return 'Janeiro';
                break;
            case 2:
                return 'Fevereiro';
                break;
            case 3:
                return  'Março';
                break;
            case 4:
                return 'Abril';
                break;
            case 5:
                return 'Maio';
                break;
            default:
                return 'não existe';
                break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/padrao.css" />
    <title>Função Dias da Semana</title>
</head>

<body>
    <form action="" method="post" class="box">
        <div>
            <label>Insira o numero
                correspondente ao mês</label>
            <input type="text" name="mes" maxlength="2" required>
        </div>
        <br>
        <div>
            <label class="">Nome do mês</label>
            <input type="text" name="nomeMes" value=<?php echo nomeMes(); ?>>
        </div>
        <br>
        <div>
            <button id="submit"> calcular</button>
        </div>
    </form>
</body>

</html>