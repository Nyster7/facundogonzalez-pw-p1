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
    $edad = $_POST["edad"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];

    if ($edad >= 18){
        echo " $nombre $apellido es mayor de edad.";
    }else{
        echo " $nombre $apellido es menor de edad.";
    }
    ?>
</body>
</html>