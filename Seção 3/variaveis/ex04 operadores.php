<?php
$nome = "Mestre Oda";

echo $nome . " Sistemas";

$nome .= " Sistemas";
var_dump($nome);

$valor = 0;
$subTotal = $valor + 30;
echo $subTotal;
echo "<br/>";

$subTotal += 50;
echo $subTotal;
echo "<br/>";

$subTotal -= 30;
echo $subTotal;
echo "<br/>";

$subTotal *= 0.9;
echo $subTotal;
echo "<br/>";

$subTotal /= 2;
echo $subTotal;
echo "<br/>";

$valorTotal = $subTotal;
echo "R$ " . number_format($valorTotal, 2);
echo "<br/>";
var_dump($valor);
var_dump($subTotal);
var_dump($valorTotal);

$a = 20;
$b = 3;

echo "a + b = " . $a + $b;
echo "<br>";

echo "a * b = " . $a * $b;
echo "<br>";

echo "a - b = " . $a - $b;
echo "<br>";

echo "a / b = " . $a / $b;
echo "<br>";

echo "a / b = " . number_format($a / $b, 2);
echo "<br>";

echo "a % b = " . $a % $b;
echo "<br>";

echo "a ** b = " . $a ** $b;
echo "<br>";

$c = 50.0;
$d = 50;

echo "<br>";
echo "c = " . $c . "; d = " . $d;
echo "<br>";
echo "maior";
var_dump($c > $d);

echo "menor";
var_dump($c < $d);

echo "valor igual";
var_dump($c == $d);

echo "tipo igual";
var_dump($c === $d);

echo "valor diferente";
var_dump($c != $d);

echo "tipo diferente";
var_dump($c !== $d);

$e = 35;
$f = 22;

echo "<br>";
echo "e = " . $e . "; f = " . $f;

echo "<br>";
echo "maior e | f";
var_dump($e <=> $f);

echo "<br>";
echo "maior f | e";
var_dump($f <=> $e);



?>