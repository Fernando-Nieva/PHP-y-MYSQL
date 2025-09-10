<?php
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
    "primario"   => ["Escuela 1", "Escuela 2"],
    "secundario" => ["Colegio A", "Colegio B"],
    "cursos"     => [
        "Programación" => ["PHP", "JavaScript"],
        "Diseño"       => ["Photoshop", "Illustrator"]
    ]
];

// Usamos print_r() para inspeccionar cada variable
echo "<pre>"; // para que el navegador respete saltos de línea

echo "String:\n";
print_r($nombre);

echo "\n\nNúmero entero:\n";
print_r($edad);

echo "\n\nNúmero decimal:\n";
print_r($altura);

echo "\n\nArray indexado (paises):\n";
print_r($paises);

echo "\n\nArreglo asociativo (usuario):\n";
print_r($usuario);

echo "\n\nArreglo multidimensional (estudios):\n";
print_r($estudios);

echo "</pre>";
