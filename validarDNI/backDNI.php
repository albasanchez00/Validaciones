<?php
$mensaje="";

if(isset($_POST['dni'])){
    $dni = $_POST['dni'];
    $expReg= "/^[0-9]{8}[A-Za-z]{1}$/";
    if(preg_match($expReg,$dni)){
        $mensaje="EL DNI es valido -> ".substr($dni,0,8);
    }else{
        $mensaje="EL DNI no es valido";
    }
}else{
    $mensaje="El campo DNI es obligatorio";
}
header('Location: frontDNI.php?mensaje='.$mensaje);


function validarLetra($dni){ //Ejemplo -> 06254254M
    $letras="TRWAGMYFPDXBNJZSQVHLCKE";
    //Extrae la parte numérica
    $enteroDNI=strstr($dni,0,8);
    // Calculamos el resto, el cual nos indicará la posición de la letra correcta de la cadena $letras.
    $resto=$enteroDNI%23;

    if($letras[$resto]==strtoupper(substr($dni,9,1))){
        var_dump($letras);
        return true;
    }else{
        return false;
    }
}