<?php
// Arreglo indexado
$paises = [
    "Argentina",
    "Brasil",
    "Chile",
    "Uruguay",
    "Paraguay",
    "México",
    "España",
    "Italia",
    "Colombia",
    "Alemania"
];

// Si querés recorrerlo
foreach ($paises as $pais) {
    if($pais == "Uruguay") {
        break;
        
    }
    echo $pais . "\n";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Paises Latinoamericanos</h1>
    <?php 

    foreach ($paises as $pais) {
    if($pais == 'México' || $pais == "España"|| $pais == "Italia" || $pais == "Alemania") {
      
    continue;        
    }
        echo $pais . "<br/>";

}



    ?>
    
</body>
</html>