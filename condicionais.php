<?php

// Condicional if, elseif e else
$a = 5;
// $b = 20;

// if ($a > $b) {
//     echo "Realmente A é maior do que B.";
// } elseif ($b == 20) {
//     echo "B é igual a 20.";
// } elseif ($a == 10) {
//     echo "A é igual a 10.";
// } else {
//     echo "Nenhuma condição é verdadeira.";
// }

// Condicional switch case
switch ($a) {
    case 0:
        echo "Tenho o valor 0";
        break;
    case 1:
        echo "Tenho o valor 1";
        break;
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Tenho o valor de 2 a 5";
        break;
    default:
        echo "Tenho outro valor";
}

echo "<br>";

$curso = 'PHP';

switch ($curso) {
    case 'PHP':
        echo "Curso de PHP";
        break;
    case 'JAVA':
        echo "Curso de Java";
        break;
    default:
        echo "Outro curso";
        break;
}