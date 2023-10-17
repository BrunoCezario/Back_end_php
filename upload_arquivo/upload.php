<?php 
if (isset ($_POST["enviar"])) {
    $arquivo = $_FILES['arquivo'];
    $arquivo_novo = explode('.', $arquivo['name']);

var_dump($arquivo_novo);
    if ($arquivo_novo[sizeof($arquivo_novo)-1] != 'jpg') {
    die("Você não pode fazer upload deste tipo de arquivo");
    }else{  
        echo"Arquivo enviado com sucesso";
        move_uploaded_file($arquivo['tmp_name'],'uploads/'.$arquivo['name']);
    }
}
      
?>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Arquivo</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
      Selecione o arquivo: 
</br>
<input type="file" name="arquivo" />
</br></br>

      <input type="submit" name="enviar" value="Enviar arquivo"/>
    </form>
</body>
</html>