<?php
$uploaddir = 'C:/Users/bruno.cezario/Pictures/';
$uploadfile = $uploaddir.$_FILES['arquivo']['name'];
if (move_uploaded_file($_FILES['arquivo']['tmp_name'],$uploadfile)){
    echo"Upload efetuado com sucesso!";
}else{
    echo "Ops! Houve uma falha no processo!";
}

?>