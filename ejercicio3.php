<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numeros = array (1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
    $tamanio = count($numeros);

    for ($x = 0; $x < $tamanio; $x++){
        echo " $numeros[$x] ";
    }
    echo "<br>";

    for ($x=20; $x >= 0; $x--){
        echo " $numeros[$x] ";
    }

    ?>
</body>
</html>