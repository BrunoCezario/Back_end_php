<?php
 function consultaCep($cep){
   // formatar o cep removendo caracteres nao numericos
   $cep = preg_replace("/[^0-9]/", "", $cep);
   $url = "http://viacep.com.br/ws/$cep/xml/";

   $xml = simplexml_load_file($url);
   return $xml;
 }

?>
<meta charset="utf-8">
<h1>Pesquisar Endereço</h1>
<form action="" method="post">
  <input type="text" name="cep">
  <button type="submit">Pesquisar Endereço</button>
</form>
<?php if(isset($_POST['cep'])){ ?>
<h2>Resultado da Pesquisa</h2>
<p>
  <?php $endereco = consultaCep($_POST['cep']); ?>
  <b>CEP: </b> <?php echo $endereco->cep; ?><br>
  <b>Logradouro: </b> <?php echo $endereco->logradouro; ?><br>
  <b>Bairro: </b> <?php echo $endereco->bairro; ?><br>
  <b>Localidade: </b> <?php echo $endereco->localidade; ?><br>
  <b>UF: </b> <?php echo $endereco->uf; ?><br>
</p>

<?php }?>