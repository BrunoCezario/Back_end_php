<?php

function valorMaisCinco()
{
    if(isset($_POST['valor'])){

    $vlr = $_POST['valor'];
    $vlr  = $vlr + 5;
    echo $vlr;
    }
}


?>