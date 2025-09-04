<?php 

$mes="Diciembre";
$edad =18;
$verdadero =false;
$nombre = "carl";

// if($edad >=18 && $nombre=='carlos'){
//     echo "puedes comprar alchol ,carlos";


// }else if($edad >=18 && $nombre!='carlos'){
//     echo 'puedes comprar alchol ';

// }

// else{

//     echo "eres menor de edad";
// }


if($edad >=18){

    echo "Bienvenido \n";
}else{
    echo "No eres mayor de edad";
}

if($mes =='diciembre'){
    echo 'Feliz navidad';

}else if($mes == 'julio'){
    echo 'que frio';

}else if($mes == 'Enero'){
    echo 'Feliz año nuevo';

}else{
    echo '';
}

if($verdadero){
    echo 'es true';
}else{
    echo 'falso';
}



?>