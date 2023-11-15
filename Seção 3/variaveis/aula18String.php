<?php
$nome = "MasterOda";
$nome2 = 'Sistemas';

var_dump($nome, $nome2);
echo "ABC $nome";
echo "<br>";

$nomemin = "odair santos";
echo strtoupper($nomemin);
echo "<br>";

$nomemaiusc = "ODAIR SANTOS";
echo strtolower($nomemaiusc);
echo "<br>";

$nomeprim = "ODAIR SANTOS";
echo ucfirst(strtolower($nomeprim));
echo "<br>";

$nomecdprim = "ODAIR SANTOS";
echo ucwords(strtolower($nomecdprim));
echo "<br>";

$empresa = "MasterOda Sistemas";
$empresaTroca = str_replace("e", "3", $empresa);
echo $empresa;
echo "<br>";
echo $empresaTroca;
echo "<br>";

$frase = "A repetição é mãe da retenção.";
$palavra = "mãe";
$q = strpos($frase, $palavra);
var_dump($q);
$corteTextoIn = substr($frase, 0, ($q-1));
echo $corteTextoIn;
echo "<br>";
var_dump($corteTextoIn);

$corteTextoFn = substr($frase, $q + strlen($palavra), strlen($frase));
echo $corteTextoFn;
echo "<br>";
var_dump($palavra);
var_dump($corteTextoFn);

$replace = "cursos";
$newEmpresa = substr($empresa, 0, strpos($empresa, "Si")) . $replace;
echo $newEmpresa;
echo "<br>";
?>