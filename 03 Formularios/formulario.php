<?php 

$errores = '';

if(isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    // --- Validar nombre ---
    if(!empty($nombre)){
        $nombre = strip_tags($nombre); 
        $nombre = htmlspecialchars($nombre, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
        echo "Tu nombre es: $nombre <br/>";
    }else{
        $errores .= 'Por favor agrega nombre <br>';
    }

    // --- Validar correo ---
    if(!empty($correo)){
        // Limpiar etiquetas y caracteres peligrosos
        $correo = strip_tags($correo);
        $correo = htmlspecialchars($correo, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');

        // Validar formato de correo
        if(filter_var($correo, FILTER_VALIDATE_EMAIL)){
            echo "Tu correo es: $correo <br/>";
        }else{
            $errores .= 'El correo no es válido <br>';
        }
    }else{
        $errores .= 'Por favor agrega un correo <br>';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de Formulario</title>
    <style>
        .error { color: red; }
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text" placeholder="Nombre" name="nombre" value="<?php echo isset($nombre) ? $nombre : ''; ?>">
        <input type="text" placeholder="Correo" name="correo" value="<?php echo isset($correo) ? $correo : ''; ?>">

        <?php if(!empty($errores)): ?>
            <div class="error"><?php echo $errores; ?></div>
        <?php endif; ?>

        <input type="submit" name="submit" value="Enviar">
    </form>
</body>
</html>
