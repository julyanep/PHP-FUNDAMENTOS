<?php

// Laço while
$i = 0;

while ($i < 10) {
    echo "Executou $i <br>";

    $i = $i + 1;
}


// Laço for
for ($i = 0; $i < 10; $i = $i + 1) {
    echo "Executou $i <br>";
}

$numeros = [2, 3, 4, 5, 7];

for ($i=0; $i < count($numeros); $i=$i+1) {
    echo $numeros[$i] . "<br>";
}

// Laço foreach
$numeros = [2, 3, 4, 5, 7];

foreach ($numeros as $key => $value) {
    echo $value . "<br>";
}
