<?php 

$nombre = 'Fernando';
function saludo($nombre){
    echo "Saludo, $nombre !";
}
saludo($nombre);
saludo('juan');
function sumar($numero1 , $numero2){
    $resultado = $numero1 + $numero2;
    // echo $resultado;
    //sentencia Return
    return $resultado;
}

// sumar(5,1) ;
$result=sumar(5,1) ;
echo $result;








?>
