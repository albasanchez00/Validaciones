<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validar DNI</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="container">
    <picture>
        <img src="/img/formato-dni.jpg" alt="formatoDNI">
    </picture>
    <div id="bloque_form">
        <h2>Validacion del DNI</h2>
        <form action="backDNI.php" method="post">
            <p class="bloque_1">
                <label for="dni">Indica el DNI</label>
                <input type="text" name="dni" id="dni">
            </p>
            <p class="bloque_2">
                <input type="submit" value="Validar" class="boton">
            </p>
        </form>
        <?php
        //La salida siempre va por GET
        if(!empty($_GET["mensaje"])){
            echo $_GET["mensaje"];
        }
        ?>
    </div>
</div>
</body>
</html>