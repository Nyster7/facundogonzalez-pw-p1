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
    $estudio = $_POST["estudio"];

    if ($estudio == "no"){
        echo "$nombre no tiene estudios.";
    }elseif ($estudio == "primarios"){
        echo "$nombre tiene estudios primarios.";
    }else{
        echo "$nombre tiene estudios secundarios.";
    }
    ?>
</body>
</html>