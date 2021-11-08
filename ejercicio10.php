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
    
    $passwords = array ("Amin"=>"admin1234","Usuario2"=>"contraseña321","User3"=>"321contraseña","NoSoyElUsuario4"=>"nosoyunacontraeña123","5eluser"=>"54321abc");
    
    foreach($passwords as $x => $x_valor){
        echo "Usuario = " . $x . ", Contraseña = " . $x_valor;
        echo "<br>";
    }
    
    ?>
</body>
</html>