<?php
// include tenta buscar o arquivo mesmo que não esteja funcionando
include "inc/aula19ArqFuncaoInc.php";

// require somente utiliza o arquivo se este estiver funcionando corretamente,
// caso contrário causa um erro fatal e interrompe o código
require "inc/aula19ArqFuncaoReq.php";

$resultadoInclude = somar(40, 10);
echo "soma = " . $resultadoInclude;
echo "<br>";

$resultadoRequire = multiplicar(2, 5);
echo  "multiplicação = " . $resultadoRequire;
echo "<br>";
?>