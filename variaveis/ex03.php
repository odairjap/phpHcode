<?php
$empresa = "Hcode";
$site = 'www.hcode.com.br';
$ano = 1990;
$salario = 5499.99;
$bloqueado = false;
/////////////////////////

$frutas = array("abacaxi", "laranja", "manga");
echo $frutas [2];
$nascimento = new Datetime();
/////////////////////////
$arquivo = fopen("ex01.php", "r");
////////////////////
$nulo = NULL;
$vazio = "";

///////////////////////
var_dump($empresa);
var_dump($site);
var_dump($ano);
var_dump($salario);
var_dump($bloqueado);
var_dump($frutas);
var_dump($nascimento);
var_dump($arquivo);
var_dump($nulo);
var_dump($vazio);
?>