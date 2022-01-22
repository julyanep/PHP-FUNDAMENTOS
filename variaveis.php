<?php

// Não é necessário declarar o valor da variável, o PHP reconhece 
// pelo tipo de dado que você dá a variável
$email = "julyane@julyane.com";

echo $email;

// A variável pode ser alterada sempre que quiser no decorrer do código
$email = "julyane123@julyane.com";

echo "<br>";
echo $email;

// O valor da variável também pode ser alterado, sem problema algum.
$email = 100;

echo "<br>";
echo $email;

// Podemos criar várias variáveis
$nome = "Julyane Pereira Hengler";

echo "<br>";
echo $nome;

// O fato de PHP ser umalinguagem de tipagem dinâmica permite que não precisemos
// declarar um valor à variável e que possamos mudar o tipo de dado sempre que quisermos.


// Ao invés de declarar variáveis com nomes genéricos
$a1 = "Julyane";
$a2 = "Pereira";
$a3 = 19;

// Devemos sempre declarar nomes que façam sentido ao contexto de desenvolvimento
$nome = "Julyane";
$sobrenome = "Pereira";
$idade = 19;