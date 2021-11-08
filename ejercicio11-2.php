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
    $edad = $_GET["edad"];
    $nombre = $_GET["nombre"];
    $apellido = $_GET["apellido"];
    $estudio = $_GET["estudio"];
    $deportes = $_REQUEST['deportes'];
    $contador = count($deportes);

    if ($edad >= 18){
        echo " $nombre $apellido es mayor de edad.";
    }else{
        echo " $nombre $apellido es menor de edad.";
    }
    
    echo "<br>";

    if ($estudio == "no"){
        echo "$nombre no tiene estudios.";
    }elseif ($estudio == "primarios"){
        echo "$nombre tiene estudios primarios.";
    }else{
        echo "$nombre tiene estudios secundarios.";
    }
    
    echo "<br>";
    echo "<br>";
    
    echo "$nombre practica ".$contador." deporte(s).<br>";

    foreach ($deportes as $deporte)
        print ("$deporte<br>\n");
    
    
    ?>
</body>
</html>