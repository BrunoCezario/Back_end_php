<?php

require_once "classes/calculadora.php";

$numero1 = $_POST['n1'];
$numero2 = $_POST['n2'];
$operacao = $_POST['operacao'];

$calculadora = new Calculadora();

$calculadora->setNumero1($numero1);
$calculadora->setNumero2($numero2);
switch($operacao){
    case "somar":
        $calculadora->somar();
        break;
    case "subtrair":
        $calculadora->subtrair();
        break;
    case "dividir":
        $calculadora->dividir();
        break;
    case "multiplicar":
        $calculadora->multiplicar();
        break;
}

header("Location:index.php?total=".$calculadora->getTotal());