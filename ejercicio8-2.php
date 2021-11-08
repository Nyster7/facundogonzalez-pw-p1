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
    $nombre = $_POST["nombre"];
    $deportes = $_REQUEST['deportes'];
    $contador = count($deportes);

    echo "$nombre practica ".$contador." deporte(s).<br>";

    foreach ($deportes as $deporte)
        print ("$deporte<br>\n");

    ?>
</body>
</html>