<?php

function consultaCep($cep){
    $curl = curl_init();
    curl_setopt_array($curl,[
    
    CURLOPT_URL => "viacep.com.br/ws/'.$cep.'/json/",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => 'GET',
    
    ]);

    $response = curl_exec($curl);
    curl_close($curl);

    $array = json_decode($response,true);

    return $array;


}

if(isset($_POST['consultar'])){



}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Pesquisar Endereço</h1>
<form action="" method="post">
  <input type="text" name="cep">
  <button type="submit" name="consultar">Pesquisar Endereço</button>
</form>
<?php if($_POST['cep']){ ?>
<h2>Resultado da Pesquisa</h2>
<p>
  <?php $endereco = consultaCep($_POST['cep']); ?>
  <b>CEP: </b> <?php echo $endereco->cep; ?><br>
  <b>Logradouro: </b> <?php echo $endereco->logradouro; ?><br>
  <b>Bairro: </b> <?php echo $endereco->bairro; ?><br>
  <b>Localidade: </b> <?php echo $endereco->localidade; ?><br>
  <b>UF: </b> <?php echo $endereco->uf; ?><br>
</p>
<?php } ?>
</body>
</html>