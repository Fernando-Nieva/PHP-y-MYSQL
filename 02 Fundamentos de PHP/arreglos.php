<?php 
$semana = ['Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo'];

// agrego un nuevo elemento en la posición 7
$semana[7] = 'domilunes';
//Arreglo Indexado
echo $semana[7] . "<br>"; // imprime "domilunes"

// array con sintaxis corta
$arreglo2 = ['Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo'];

// ✅ mostrar array con print_r dentro de etiquetas <pre> para que se vea bien
echo "<pre>";
print_r($arreglo2);
echo "</pre>";
print_r($arreglo2);
echo "<br>";

// ✅ imprimir un solo elemento
echo $arreglo2[3] . "<br>"; // imprime "Jueves"

//Arreglo Asociativo

$alex = array('telefono'=>'3704268545','edad'=>25,'apellido'=>'Galeano','pais'=>'Argentina');

echo $alex['edad'] . "\n";
echo $alex['apellido'] . "\n";