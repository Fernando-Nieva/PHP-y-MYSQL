<?php 

// if(!$_POST){

//     header('Location:http://localhost:3000/03%20Formularios/idex.php');
// }
// // print_r( $_POST) ;
// // post simpre que sea informacion sencible 
// $nombre =$_POST['nombre'];
// $sexo=$_POST['sexo'];
// $year=$_POST['year'];
// $terminos=$_POST['terminos'];

// echo 'hola ' . $nombre . ' eres '. $sexo;


// print_r($_GET);
// get todo por url
// solo para traer infromacion y editarla


 if(!$_GET){

    header('Location:http://localhost:3000/03%20Formularios/idex.php');
}
$nombre =$_GET['nombre'];
$sexo=$_GET['sexo'];
$year=$_GET['year'];
$terminos=$_GET['terminos'];

echo htmlspecialchars( 'hola ' . $nombre . ' eres '. $sexo);
?>