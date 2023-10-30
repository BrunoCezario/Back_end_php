<?php

class calculadora{
    private $total;
    private $n1;
    private $n2;

    function __construct(){
        $this -> total = 0;
        $this -> n1 = 0;
        $this -> n2 = 0;
    }
    public function setNumero1($n1){
        $this -> n1 = $n1;
    }
    public function setNumero2($n2){
        $this -> n2 = $n2;
    }
    public function somar(){
        $this->total = $this->n1 + $this->n2;
    }
    public function subtrair(){
        $this->total = $this->n1 - $this->n2;
    }
    public function dividir(){
        $this->total = $this->n1 / $this->n2;
    }
    public function multiplicar(){
        $this->total = $this->n1 * $this->n2;
    }
    public function getTotal(){
        return $this->total;
    }
}
?>