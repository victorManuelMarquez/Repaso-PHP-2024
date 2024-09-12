<?php

header('Content-type: text/plain');

$valor1 = "Texto";
$valor2 = "230";
$valor3 = true;
$valor4 = 3.14;
$valor5 = 4110;

echo 'Variables:' . "\r\n\n";

echo var_dump($valor1) . "\r\n";
echo var_dump($valor2) . "\r\n";
echo var_dump($valor3) . "\r\n";
echo var_dump($valor4) . "\r\n";
echo var_dump($valor5) . "\r\n";

?>