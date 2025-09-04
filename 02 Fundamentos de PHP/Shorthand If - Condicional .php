<?php
// Caso 1: variable no definida
// $edad = null; // comentado para simular que no existe

// Usamos el operador ternario con isset
$edadValor = isset($edad) ? $edad : 'El usuario no estableció su edad';
echo 'Edad: ' . $edadValor . "\n"; 
// Salida: Edad: El usuario no estableció su edad

// Caso 2: variable definida
$edad = 25;
$edadValor = isset($edad) ? $edad : 'El usuario no estableció su edad';
echo 'Edad: ' . $edadValor . "\n"; 
// Salida: Edad: 25
?>
