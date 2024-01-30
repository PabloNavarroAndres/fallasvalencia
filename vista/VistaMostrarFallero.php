<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Fallero</title>
</head>
<body>
    <form action="fallero.php" method="POST">
        <label for="dni">DNI: </label>
        <input type="text" name="dni">

        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php 

// Ver si hay datos del $_POST
if(isset($_POST)) {

    include ("ControladorFalleros.php");

    
    $dni = $_POST[$dni];



}

?>