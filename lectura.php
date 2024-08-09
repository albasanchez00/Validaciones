<?php
$mensaje="";
if(empty($_POST["numero"])){
    $mensaje="Debe ingresar un número";
} else{
    //La funcion is_numeric devuelve true si es numérico y false si no lo es
    if (is_numeric($_POST["numero"])){
        $mensaje="Debes ingresar un número correcto";
    } else{
        $numero = "Bien...es un número correcto".$_POST["numero"];
    }
}

if(empty($_POST["nombre"]) || !is_string($_POST["nombre"])){
    $mensaje="Debe ingresar un nombre correcto";
}else{
    $mensaje="Bien... es un nombre correcto ".$_POST["nombre"];
}

header('Location: index.php?mensaje='.$mensaje);
