<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Minha primeira página com PHP!</h1>

    <?php 
    echo "Minha string vinda do PHP";   
    ?>

    <!-- Misturando html com php  -->
    <p>Estou no curso de <?php echo "PHP"; ?></p>

    <!-- Colocando uma soma no php -->
    <p>10 mais 10 é igual a <?php echo 10 + 10; ?></p>

    <!-- Utilizando tag curta para abrir o php -->
    <p>Estou no curso de <?= "PHP" ?></p>

    <!-- Esta short tag é especifica para exibição. Substitui o echo -->
    <p>10 mais 10 é igual a <?= 10 + 10; ?></p>

    <!-- Podemos usar várias linhas de php dentro de um html -->
    <?php 
        echo "Minha linha 1 <br>";
        echo "Minha linha 2 <br>";
        echo "Minha linha 3 <br>";
    ?>
</body>
</html>