<?php

// Declarando um array
$linguagens = ["PHP", "C#", "Java"];

// Adicionando mais itens em um array
$linguagens [3] = "Python";

var_dump($linguagens);
echo "<br>";

// Vendo o array pelo indice
echo $linguagens[0];

// Declarando array de outra forma
$linguagens2 = array("PHP", "C#", "Java");

echo "<br>";
echo $linguagens2[1];


// Arrays associativos
$curso = ["Curso de PHP Fundamentos", 7.4, 40, true];

$curso = [
    "nome_curso" => "Curso de PHP Fundamentos",
    "versao_ferramenta" => 7.4,
    "carga_horaria" => 40,
    "status" => true
];


echo "<br>";
echo $curso["nome_curso"];
echo "<br>";
echo $curso["versao_ferramenta"];
echo "<br>";
echo $curso["carga_horaria"];
echo "<br>";
echo $curso["status"];

// Arrays multidimensionais
$numeros = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11]
];


echo "<br>";
echo "<br>";
echo $numeros[0][2];

$cursos = [
    "php" => [
        "nome_curso" => "Curso de PHP Fundamentos",
        "versao_ferramenta" => 7.4,
        "carga_horaria" => 40,
        "status" => true
    ],
    "Java" => [
        "nome_curso" => "Curso de Java Fundamentos",
    "versao_ferramenta" => 7.5,
    "carga_horaria" => 80,
    "status" => false
    ]
];

echo "<br>";
echo $cursos["php"]["nome_curso"];