<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Contacto</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="wrap">
  
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>"></input>

    <input type="text" class="form-control" name="correo" id="correo" placeholder="Correo" value="<?php if(!$correo && isset($correo)) echo $correo ?>"></input>

    <textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje"><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>
   
    <?php if(!empty($errores)): ?>
        <div class="alert error">
            <?php echo $errores; ?>
        </div>


    <?php elseif($enviado): ?>
        
         <div class="alert succes">
            <p>Enviado Correctamente</p>
        </div>
    <?php endif ?>


    <input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">

    </form>


    </div>
    
</body>
</html>