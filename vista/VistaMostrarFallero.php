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

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Fallero</title>
    <style>
        /* Titulo */
        h1 {
            background-color: #dddddd;
        }

        /* Estilo para la tabla */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        /* Estilo para las celdas de encabezado (th) */
        th {
            border: 2px solid #dddddd;
            padding: 8px;
            background-color: #f2f2f2;
        }

        /* Estilo para las celdas de datos (td) */
        td {
            border: 2px solid #dddddd;
            padding: 8px;
            text-align: center;
        }

        /* Mensaje de exito */
        #msj_exito {
            color: green;
        }
    </style>
</head>
<body>

<br><br>

<form action="/fallasvalencia/fallero.php" method="POST">
    <label for="dni">DNI: </label>
    <input type="text" name="dni">
    <input type="hidden" value="mostrar" name="accion">

    <input type="submit" value="Enviar">
</form>

<br><br>

<table border="1">
    <tr>
        <th>DNI</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Cuota</th>
        <th>Id falla</th>
    </tr>
    <tr>
        <?php 
            if(isset($fallero)) { ?>
            <td> <?php echo $fallero->getDni() ?> </td>
            <td> <?php echo $fallero->getNombre() ?> </td>
            <td> <?php echo $fallero->getApellidos() ?> </td>
            <td> <?php echo $fallero->getCuota() ?> </td>
            <td> <?php echo $fallero->getIdFalla() ?> </td>
        <?php } ?>
    </tr>
</table>

    <!-- pie de la aplicación -->
    <?php require 'base/pie.php' ?>
</body>

</html>