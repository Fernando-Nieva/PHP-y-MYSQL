<?php
// Función que recibe dos parámetros y devuelve un resultado
function sumar($a, $b){
    return $a + $b; // ✅ Devuelve la suma
}

// Variable global
$numero1 = 7;
$numero2 = 3;

// Llamo a la función pasando las variables como argumentos
$resultado = sumar($numero1, $numero2);

// Muestro el resultado
echo "La suma de $numero1 + $numero2 es: $resultado";
?>
