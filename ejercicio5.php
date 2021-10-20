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
    $numero = 4;

    for ($x = 4; $x <= 40; $x+=4){
        echo " $x ";
    }
    
    echo "<br>";

    while ($numero <= 40){
        echo " $numero ";
        $numero +=4;
    }
    ?>
</body>
</html>