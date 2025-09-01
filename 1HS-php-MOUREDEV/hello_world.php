
<?php
echo "Hola, PHP \n";
/*
este e sun comentario
*/

//string
$my_str = "\t Esto es una cadena de texto \n";
$my_str = "aqui cambio mi cadena de texto";
echo $my_str ."\n";

//entero
$m_int=6;
$m_int= $m_int+  6 ;
echo gettype($m_int)."\n";

//flotante

$my_double =6.5;
echo gettype( $my_double) ."\n";
echo $m_int+$my_double."\n";

//booleano
/*

$boolTrue = true;
$boolFalse = false;

echo $boolTrue;   // imprime 1
echo $boolFalse;  // imprime nada (pero en cálculo vale 0)

echo $boolTrue + 10;   // 11
echo $boolFalse + 10;  // 10
*/
$my_bool = true;
echo $my_bool ."\n";
//echo $my_bool = false;
echo $my_bool ."\n";
echo gettype( $my_bool) ."\n";

//interpolacion
echo "El valor de mi interger es  $m_int y el de mi boolean es  $my_bool\n";

//constantes

const my_constant ="valor de la contante";
echo my_constant."\n";

//Listas

$my_array =[$my_str,$my_double,$m_int];

echo gettype($my_array) ."\n";
echo $my_array[0]."\n";
echo $my_array[3]."\n";
array_push( $my_array,$my_bool);
print_r($my_array);
// echo $my_array[4]."\n";

//Diccionario

$my_dic=array("string"=>$my_str,"int" =>$m_int);
echo $my_dic[0]."\n";
echo gettype($my_dic) ."\n";
print_r($my_dic);
echo $my_dic['int']."\n";

//set
array_push($my_array,"fernando");
array_push($my_array,"fernando");
print_r($my_array);
print_r(array_unique($my_array));