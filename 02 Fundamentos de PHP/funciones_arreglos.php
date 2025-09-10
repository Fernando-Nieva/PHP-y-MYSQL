<?php 

// --- EJEMPLO DE ARRAY ASOCIATIVO ---
// $amigo = array('telefono'=>37045858,'edad'=>15,'pais'=>'mexico');
//
// 'extract()' convierte las claves del array en variables.
// extract($amigo); 
// echo $edad; // Mostraba 15

// --- ARRAY DE DÍAS DE LA SEMANA ---
$dias = array(
    "Lunes",
    "Martes",
    "Miércoles",
    "Jueves",
    "Viernes",
    "Sábado",
    "Domingo"
);

// Lo volvés a declarar (esto pisa el anterior, no hace falta repetirlo).
$dias = array(
    "Lunes",
    "Martes",
    "Miércoles",
    "Jueves",
    "Viernes",
    "Sábado",
    "Domingo"
);

// --- MANIPULANDO EL ARRAY ---
// Extrae el último elemento del array ("Domingo") y lo guarda en $ultimo_dia.
$ultimo_dia = array_pop($dias); 

// Vuelve a extraer otro elemento al final ("Sábado"), pero no lo guardás en ninguna variable.
array_pop($dias); 

// --- FORMAS DE RECORRER O MOSTRAR (comentadas) ---
// foreach ($dias as $value) {    
//     echo $value . '<br />';   // Mostraría cada día en una línea
// }

// echo "<br>Último día eliminado: " . $ultimo_dia; // Mostraría "Domingo"

// Une los elementos restantes del array con " - " como separador
// echo join(' - ',$dias )."\n"; 

// Muestra la cantidad de elementos actuales en $dias
// echo count($dias);

// Ordena alfabéticamente el array (A-Z)
// sort($dias);

// Ordena alfabéticamente pero de Z-A
// rsort($dias);

// echo join(" , ",$dias); // Une los elementos con coma

// --- DAR VUELTA EL ARRAY ---
$semana_reverse = array_reverse($dias); // Invierte el orden de los días
echo join("*",$semana_reverse); // Une los elementos con "*" como separador

?>
