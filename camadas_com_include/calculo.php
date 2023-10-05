<?php

function valorMaisCinco()
{
    if(isset($_POST['valor'])){

    $vlr = $_POST['valor'];
    $vlr  = $vlr + 10;
    echo $vlr;
    }
}


?>