<?php
// Función que recibe dos números y devuelve su suma
function sumar($a, $b){
    return $a + $b;
}

// Uso de la función
// echo sumar(5, 7); // Imprime: 12

// -------------------- INCLUDE --------------------
// include se usa para traer el contenido de otro archivo
// Si el archivo no existe, PHP mostrará un warning ⚠️ pero el script seguirá ejecutándose
include './vista.php'; // Trae el contenido de vista.php

// -------------------- REQUIRE --------------------
// require también trae el contenido de otro archivo
// Si el archivo no existe, PHP lanza un fatal error ⛔ y detiene la ejecución
// require 'vista.php'; // Descomenta para probar la diferencia

// -------------------- REQUIRE_ONCE --------------------
// require_once hace lo mismo que require, pero se asegura de que el archivo
// solo se incluya una vez, evitando errores por redeclaración de funciones o clases
// require_once 'vista.php';
?>
