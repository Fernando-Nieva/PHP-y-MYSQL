<?php
// Operadores aritméticos
$a = 10;
$b = 3;

echo $a + $b; // 13 → suma
echo $a - $b; // 7 → resta
echo $a * $b; // 30 → multiplicación
echo $a / $b; // 3.3333 → división
echo $a % $b; // 1 → módulo (resto de la división)
echo $a ** $b; // 1000 → potencia (10^3)

// Operadores de asignación
$c = 5;
$c += 2; // 7 → equivalente a $c = $c + 2
$c -= 3; // 4 → equivalente a $c = $c - 3
$c *= 2; // 8 → equivalente a $c = $c * 2
$c /= 4; // 2 → equivalente a $c = $c / 4

// Operadores de comparación
$x = 5;
$y = 10;

var_dump($x == $y); // false → igual a
var_dump($x != $y); // true → diferente de
var_dump($x === $y); // false → idéntico (valor y tipo)
var_dump($x !== $y); // true → no idéntico
var_dump($x < $y); // true → menor que
var_dump($x > $y); // false → mayor que

// Operadores lógicos
$verdadero = true;
$falso = false;

var_dump($verdadero && $falso); // false → AND lógico
var_dump($verdadero || $falso); // true → OR lógico
var_dump(!$verdadero); // false → NOT lógico

// Operadores de incremento/decremento
$num = 5;
$num++; // 6 → incrementa en 1
$num--; // 5 → decrementa en 1

$nombre = "Fernando";
$apellido = "Nieva";

// Concatenación simple
$nombreCompleto = $nombre . " " . $apellido;
echo $nombreCompleto; // Fernando Nieva

// Concatenación y texto adicional
echo "Hola, mi nombre es " . $nombre . "."; // Hola, mi nombre es Fernando.

// Concatenación con asignación
$mensaje = "Bienvenido, ";
$mensaje .= $nombre; // equivalente a $mensaje = $mensaje . $nombre
echo $mensaje; // Bienvenido, Fernando