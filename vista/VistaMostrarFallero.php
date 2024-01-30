<!-- ------------------------------------------------------------------------------------------
VistaMostrarFallero
------------------------------------------------------------------------------------------- -->

<!doctype html>
<html lang="en">

<!-- Cabecera de la aplicación -->
<?php require 'base/cabecera.php' ?>

<!-- ------------------------------------------------------------------------------------------
CUERPO DE LA VISTA
------------------------------------------------------------------------------------------- -->

<body>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Fallero</title>
</head>
<form action="fallero.php" method="POST">
    <label for="dni">DNI: </label>
    <input type="text" name="dni">

    <input type="submit" value="Enviar">
</form>

<?php 

// Ver si hay datos del $_POST
if(isset($_POST)) {

    include ("ControladorFalleros.php");


    $dni = $_POST[$dni];



}

?>
    <!-- pie de la aplicación -->
    <?php require 'base/pie.php' ?>
</body>

</html>