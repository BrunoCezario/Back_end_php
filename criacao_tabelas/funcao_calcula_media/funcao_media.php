<?php
function media($val1, $val2)
{
       if (isset($val1) && isset($val2)) {
            $media = ($val1 + $val2) / 2;
            return $media;

    } else {
        return 'inválido';
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
            <label>Valor prova A1 </label>
            <input type="text" name="val2" required>
        </div>
        <br>
        <div>
            <label>Valor prova A2</label>
            <input type="text" name="val1" required>
        </div>
        <br>
        <div>
            <label class="">Média</label>
            <input type="text" name="media" value=<?php if (isset($_POST['calcular'])) {

                                                        echo media($_POST['val1'], $_POST['val2']);
                                                    };

                                                    ?>>
        </div>
        <br>
        <div>
            <button name="calcular" id="submit"> calcular</button>
        </div>
    </form>
</body>

</html>