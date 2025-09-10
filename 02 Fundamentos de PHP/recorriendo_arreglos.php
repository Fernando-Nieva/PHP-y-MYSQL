<?php 


//  Arreglo con los nombres de los meses
$meses = array(
    "Enero",
    "Febrero",
    "Marzo",
    "Abril",
    "Mayo",
    "Junio",
    "Julio",
    "Agosto",
    "Septiembre",
    "Octubre",
    "Noviembre",
    "Diciembre"
);


// for ($i = 0; $i < count($meses); $i++) {

//     echo($meses[$i]."\n");
// }

$contador=0;
while ($contador < count($meses)) {

echo $meses[$contador] . "\n";
    $contador++;
}

