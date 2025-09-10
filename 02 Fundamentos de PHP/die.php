<?php 

echo "soy un echo";

// 🔹 die detiene la ejecución del script inmediatamente
// Todo lo que esté después de die() NO se ejecutará
die();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola mundo</h1> <!-- ❌ Esto NO se mostrará porque el script murió antes -->
</body>
</html>
