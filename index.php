<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validaciones</title>

</head>
<body>
    <h1>Validación de Datos</h1>
    <form action="lectura.php" method="post">
        <p>
            <label for="numero">Indica un número (max 999999999)</label>
            <input type="number" name="numero" id="numero" pattern="[0-9]{1-10}" >
        </p>
        <p>
            <label for="nombre">Indica tu nombre</label>
            <input type="text" name="nombre" id="nombre">
        </p>
        <p>
            <input type="submit" value="Enviar" id="boton">
        </p>
    </form>
    <?php
        //La salida siempre va por GET
        if(!empty($_GET["mensaje"])){
            echo $_GET["mensaje"];
        }
    ?>
</body>
</html>