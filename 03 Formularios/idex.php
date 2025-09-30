<?php 

if($_POST){
    echo $_POST['nombre'];

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
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <input type="text" placeholder="Nombre" name="nombre" id="">
        <br>

        <label for="hombre">Hombre</label>
        <input type="radio" name="sexo" value="hombre">
        <label for="hombre">Mujer</label>
        <input type="radio" name="sexo" value="mujer">

      <select name="year" id="year">
<?php
$anio_actual = date("Y"); // obtiene el año actual
for ($year = 1900; $year <= $anio_actual; $year++) {
    echo "<option value='$year'>$year</option>";
}
?>
</select>

<label for="terminos">Aceptas los Terminos?</label>
<input type="checkbox" name="terminos" id="terminos" value="ok">

        <input type="submit" value="Enviar">
        

    </form>
</body>
</html>