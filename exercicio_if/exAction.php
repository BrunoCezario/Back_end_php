<?php 
 session_start();
  $menor = $_POST['numero1'];
  $meio = $_POST['numero2'];
  $maior = $_POST['numero3'];

  if($meio < $menor){
   $temp=$menor;
   $menor=$meio;
   $meio=$temp;
  }
  
  if($maior < $menor){
   $temp=$menor;
   $menor=$maior;
   $maior=$temp;
  }
  
  if($maior < $meio){
   $temp=$meio;
   $meio=$maior;
   $maior=$temp;
  }
  //ternario
  echo $menor !='' && $meio !='' && $maior!=''? "$menor < $meio < $maior" : '';
  ?>