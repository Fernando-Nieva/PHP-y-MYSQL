<?php
// Inicializamos el contador
$i = 1;

// Mientras la condición sea verdadera, se ejecuta el bloque de código
while ($i <= 10) {
    echo "Número: $i\n"; // Imprime el número actual
    $i++; // Incrementamos el contador para que eventualmente la condición sea falsa
}

// Cuando $i llega a 6, la condición ($i <= 5) es falsa y el ciclo termina

$a = 10;

do {
    echo "Número: $a\n"; // Imprime el valor actual de $i
    $a--; // decrementamos el contador
} while ($a >= 0); // La condición se evalúa después de ejecutar el bloque

// Explicación:
// 1. El bloque dentro de 'do { ... }' se ejecuta al menos una vez.
// 2. Luego se evalúa la condición ($i <= 5).
// 3. Mientras la condición sea verdadera, el ciclo continúa.
// 4. Cuando $i llega a 6, la condición es falsa y el ciclo termina.