<?php 

include("Modelo.php");
include("Fallero.php");
function mostrarFallero($dni) {
    
    // Clase de Modelo donde esta la conexion a la BD
    $modelo = new Modelo();

    // Conexion a la BD
    $bd = $modelo->conn;

    // SQL para mostrar falleros- > dni, nombre, apellidos, cuota, id_falla

    // Query fallero
    $sqlFallero = (
        "SELECT dni, nombre, apellidos, cuota, id_falla
        FROM falleros"
    );

    // Preparamos la consulta
    $sqlFallero = $bd->query($sqlFallero);

    // Bucle para sacar datos de cada fallero: dni, nombre, apellidos, cuota, id_falla
    while ($fallero = $sqlFallero->fetch()) {

        // Objeto fallero
        $fallero = new Fallero($fallero['dni'], $fallero['nombre'], $fallero['apellidos'], $fallero['cuota'], $fallero['id_falla']);

        // Array falleros
        $arrFalleros[] = $fallero;
    }

    // Devolvemos el array de fallas
    return $arrFalleros;


}

?>