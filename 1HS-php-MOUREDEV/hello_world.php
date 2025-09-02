<?php
// ----------------------
// Hola mundo en PHP
// ----------------------
echo "Hola, PHP \n"; // salida básica

/*
   Comentario multilínea
   (como en otros lenguajes)
*/

// ----------------------
// STRINGS
// ----------------------
$my_str = "\t Esto es una cadena de texto \n"; // string con tabulación y salto
$my_str = "salud";                             // reasigno el valor
echo $my_str ."\n";                            // concatenación con "."

// ----------------------
// ENTEROS (int)
// ----------------------
$m_int = 6;               // entero
$m_int = $m_int + 6;      // suma → 12
echo gettype($m_int)."\n"; // imprime "integer"

// ----------------------
// FLOTANTES (float / double)
// ----------------------
$my_double = 6.5;                         // número con decimales
echo gettype($my_double) ."\n";           // imprime "double"
echo $m_int + $my_double."\n";            // operación entre int + float

// ----------------------
// BOOLEANOS
// ----------------------
$my_bool = true;
echo $my_bool ."\n";        // true → 1
$my_bool = false;
echo $my_bool ."\n";        // false → vacío (pero vale 0 en cálculos)
echo gettype($my_bool) ."\n"; // imprime "boolean"

// interpolación de variables en strings con ""
echo "El valor de mi integer es $m_int y el de mi boolean es $my_bool\n";

// ----------------------
// CONSTANTES
// ----------------------
const MY_CONSTANT = "valor de la constante"; // buenas prácticas: mayúsculas
echo MY_CONSTANT."\n";

// ----------------------
// ARRAYS (listas indexadas)
// ----------------------
$my_array = [$my_str, $my_double, $m_int]; // array inicial
echo gettype($my_array) ."\n";             // "array"
echo $my_array[0]."\n";                    // acceso por índice
// echo $my_array[3]; // ❌ error, aún no existe

array_push($my_array, $my_bool);           // agrego elemento
echo $my_array[3]."\n";                    // ahora sí existe
print_r($my_array);                        // muestra contenido

// ----------------------
// ARRAYS ASOCIATIVOS (diccionarios)
// ----------------------
$my_dic = array("string" => $my_str, "int" => $m_int);
// echo $my_dic[0]; // ❌ no hay índice numérico
echo $my_dic["string"]."\n"; // acceso por clave
echo gettype($my_dic) ."\n"; // sigue siendo "array"
print_r($my_dic);
echo $my_dic['int']."\n";

// ----------------------
// "SETS" simulados con array_unique
// ----------------------
array_push($my_array, "fernando");
array_push($my_array, "fernando"); // duplicado
print_r($my_array);
print_r(array_unique($my_array)); // elimina repetidos

// ----------------------
// FLUJOS DE CONTROL
// ----------------------
for ($index = 0; $index < 10; $index++) {
    echo $index."\n"; // bucle for
}

foreach ($my_array as $my_item) {   
    echo $my_item."\n"; // recorre elementos
}

$index = 0;
while ($index <= sizeof($my_array) - 1) {
    echo $my_array[$index]."\n"; // bucle while
    $index++;
}

// ----------------------
// CONDICIONALES
// ----------------------
if ($m_int == 11 && $my_str == "hola") {
    echo "el valor es 11 \n";
} elseif ($m_int == 14 || $my_str == "salud") {
    echo "el valor  es 12 \n";
} else {
    echo "el valor no es 11 \n";
}

// ----------------------
// FUNCIONES
// ----------------------
function print_number(int $my_number) {
    echo $my_number."\n"; // imprime un número
}

print_number(2.5); // imprime 2 (PHP castea a int)
print_number(10);
print_number(15);

// ----------------------
// CLASES
// ----------------------
class myClass {
    public $name;   
    public $age;

    // constructor (se ejecuta al crear el objeto)
    function __construct($name, $age) {
        $this->name = $name; // this → referencia al objeto
        $this->age = $age;
    }
}

$my_class = new myClass("Fernando", 33); // objeto nuevo
print_r($my_class); 
echo $my_class->name ."\n";              // acceso a propiedad
echo $my_class->name = "Marcelo \n";     // reasignación de propiedad
echo gettype($my_class) ."\n";           // imprime "object"
