<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio8-2.php" method="post">
        Nombre: <input type="text" name="nombre" id="nombre"><br>
        Deportes: <br>
        <input type="checkbox" name="deportes[]" value="Futbol">Futbol
        <input type="checkbox" name="deportes[]" value="Rugby">Rugby
        <input type="checkbox" name="deportes[]" value="Basket">Basket
        <input type="checkbox" name="deportes[]" value="Tennis">Tennis
        <input type="checkbox" name="deportes[]" value="Vóley">Vóley
        <input type="checkbox" name="deportes[]" value="E-sports">E-sports <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>