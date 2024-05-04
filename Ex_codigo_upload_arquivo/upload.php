<?php
$uploaddir = 'C:/Users/bruno.cezario/Pictures/';
$uploadfile = $uploaddir.$_FILES['arquivo']['name'];

$arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] :'FALSE';
$nome = strtolower($_FILES['arquivo']['name']);
$nome = str_replace("", "_",$arquivo['name']);
$mime = $_FILES["arquivo"]["type"];
$tipo = 'image/png';
$uploadfile = $uploaddir .$nome;
$temp = $_FILES["arquivo"]["tmp_name"];
$erros = $_FILES["arquivo"]["error"];

if(file_exists($uploadfile)){

}

if($tipo !== $mime){

}

if ($arquivo){

}

if (move_uploaded_file($_FILES['arquivo']['tmp_name'],$uploadfile)){
    echo"Upload efetuado com sucesso!";
    echo"<br><br>";
    $nome = $_FILES["arquivo"]["name"];
    echo"Nome do original do arquivo: " .$nome;
    echo"<br>";
    $mime =$_FILES["arquivo"]["type"]; 
    echo "Tipo MIME do arquivo: " .$mime;
    echo "<br>";
    $tamanho=$_FILES["arquivo"]["size"]; 
    echo "Tamanho do arquivo em bytes: " .$tamanho;
    echo "<br>";
    $temp = $_FILES["arquivo"]["tmp_name"]; 
    echo"Nome temporário do arquivo: " .$temp;
    echo "<br>";
    $erros = $_FILES["arquivo"]["error"]; 
    echo "Código do erro ocorrido durante o upload do arquivo: ".$erros;

    // if($_FILES['arquivo']['error']==UPLOAD_ERR_OK){
    //     echo"Não houve erro no processo!";
    // }
}else{
    echo "Ops! Houve uma falha no processo!";
    // echo"<br><br>";
    // $nome = $_FILES["arquivo"]["name"];
    // echo"Nome do original do arquivo: " .$nome;
    // echo"<br>";
    // $mime =$_FILES["arquivo"]["type"]; 
    // echo "Tipo MIME do arquivo: " .$mime;
    // echo "<br>";
    // $tamanho=$_FILES["arquivo"]["size"]; 
    // echo "Tamanho do arquivo em bytes: " .$tamanho;
    // echo "<br>";
    // $temp = $_FILES["arquivo"]["tmp_name"]; 
    // echo"Nome temporário do arquivo: " .$temp;
    // echo "<br>";
    // $erros = $_FILES["arquivo"]["error"]; 
    // echo "Código do erro ocorrido durante o upload do arquivo: ".$erros;
}

?>