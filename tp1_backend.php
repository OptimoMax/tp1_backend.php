<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 2 php</title>
</head>
<body>

    <h1>
    Clase 2 PHP / David Stilman

    </h1>

    <?php
echo "Hola mundo";
?>
<br>
<?php
$mensaje = "Hola mundo";
echo $mensaje;
?>


<br>
<br>

<?php


// declaro variables

$numero1 = 2;
$numero2 = 1;

// sumo variables

$suma = $numero1 + $numero2;
echo "La suma es: " . $suma . "<br>";

// resto las  variables
$resta = $numero1 - $numero2;
echo "La resta es: " . $resta . "<br>";

// multiplicacion
$multiplicacion = $numero1 * $numero2;
echo "La multiplicación es: " . $multiplicacion . "<br>";

// division
if ($numero2 != 0) {
    $division_entera = $numero1 / $numero2;
    echo "La división entera es: " . $division_entera . "<br>";
} else {
    echo "No se puede dividir por cero.<br>";
}

//el  resto
if ($numero2 != 0) {
    $resto = $numero1 % $numero2;
    echo "El resto de la división entera es: " . $resto . "<br>";
} else {
    echo "No se puede calcular el resto porque el segundo número es cero.<br>";
}
?>


<br>
<br>



<?php
//esta es la formula o funcion, pero nose como hacerla para poder intercambiarla
$celsius = 10;
$fahrenheit = ($celsius * 9/5) + 32;
echo "{$celsius}°C equivale a {$fahrenheit}°F";
?>



    
</body>
</html>