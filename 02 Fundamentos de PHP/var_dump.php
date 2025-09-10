<<?php
// Un string (texto)
$nombre = "Fernando Nieva";

// Un número entero
$edad = 32;

// Un número decimal
$altura = 1.78;

// Un array indexado (lista simple)
$paises = ["Argentina", "Brasil", "Chile"];

// Un arreglo asociativo (clave => valor)
$usuario = [
    "nombre" => "Fernando",
    "apellido" => "Nieva",
    "edad" => 32
];

// Un arreglo multidimensional (array dentro de otro)
$estudios = [
    "primario" => ["Escuela 1", "Escuela 2"],
    "secundario" => ["Colegio A", "Colegio B"],
    "cursos" => [
        "Programación" => ["PHP", "JavaScript"],
        "Diseño" => ["Photoshop", "Illustrator"]
    ]
];

// Usamos var_dump() para inspeccionar cada variable
echo "<pre>"; // Para que la salida se vea más prolija en el navegador

echo "String:\n";
var_dump($nombre);

echo "\nNúmero entero:\n";
var_dump($edad);

echo "\nNúmero decimal:\n";
var_dump($altura);

echo "\nArray indexado (paises):\n";
var_dump($paises);

echo "\nArreglo asociativo (usuario):\n";
var_dump($usuario);

echo "\nArreglo multidimensional (estudios):\n";
var_dump($estudios);

echo "</pre>";
