<?php 

// if($_SERVER['REQUEST_METHOD']== 'POST'){
//     echo'se enviaron por POST';
    
// }else{
    
//     echo'se enviaron por GET';
// }

if(isset($_POST['submit'])){
    echo'se han enviado los datos correctamente';
    print_r($_POST['submit']);

} 

?>