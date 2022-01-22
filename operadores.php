<?php

// Operadores aritiméticos
$soma = 5 + 6;
$subtracao = 5 - 10;
$multiplicação = 5 * 10;
$divisao = 100 / 10;
$resto = 20 % 3;
$exponencial = 10 ** 3;

var_dump($soma);
echo "<br>";


// Operadores de comparação
$a = 10;
$b = 20;

#igualdade
var_dump($a == $b);
echo "<br>";

#diferente
var_dump($a != $b);
echo "<br>";

#menor
var_dump($a < $b);
echo "<br>";

#maior
var_dump($a > $b);
echo "<br>";

#menor ou igual
var_dump($a <= $b);
echo "<br>";

#maior ou igual
var_dump($a >= $b);
echo "<br>";

// Operadores de igualdade e tipo
$d = 10;
$e = "10";

#Quando você adiciona mais um sinal de igual ele verifica o tipo e o valor
var_dump($d === $e);
echo "<br>";

var_dump($e !== $d);
echo "<br>";


// Operadores lógicos
$f = true;
$g = false;

#&& ou and
var_dump($f && $g);
echo "<br>";

#|| ou or
var_dump($f or $g);
echo "<br>";

#xor
var_dump($f xor $g);
echo "<br>";

#not
var_dump(!$f);
echo "<br>";


// Operadores de concatenação

$escola = "Treinaweb";
$curso = "PHP";

$frase = "Faça o curso de " . $curso . " na escola " . $escola;

echo $frase;



