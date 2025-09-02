<?php
$amigos = array(
    array('alejandro',20),
    array('cesar',21),
    array('manuel',18)
);

echo $amigos[0][1]."\n";
echo $amigos[1][0]."\n";

$meses = array('Enero','Febrero','Marzo','Abril',
'Mayo','Junio','Julio','Agosto','Septiembre',
'Octubre','Noviembre','Diciembre');

//ordena de forma alfabetica
// sort($meses);
rsort($meses);

$numeros=[1,2,3,4,5,6,8,9,10];
sort($numeros);

$ultimo_mes = count($meses)-1;
echo $meses[$ultimo_mes];
?> <!-- cerramos PHP -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses del Año</title>
</head>
<body>
    <h1>Meses del año</h1>
    <ul>
        <?php 
        foreach ($meses as $mes) {
            echo '<li>'. $mes.'</li>';
        }
        ?>
         <?php 
        foreach ($numeros as $num) {
            echo '<li>'. $num.'</li>';
        }
        ?>
    </ul>
    
</body>
</html>
