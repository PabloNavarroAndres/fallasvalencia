<?php 


    include_once("controlador/ControladorFalleros.php");

    // Instanciamos el controlador de falleros
    $controladorFalleros = new ControladorFalleros();

    $strAccion = (isset($_POST['accion'])) ? $_POST['accion'] : require "vista/VistaMostrarFallero.php";

    // Comprobar la funcion que hemos escogido
    switch ($strAccion) {

        case 'mostrar':
            
            // Incluimos mostrarfallero para meterle los datos que sacara el controlador del fallero
            // include("mostrarfallero.php");
            $fallero = $controladorFalleros->mostrarFallero();

            require "vista/VistaMostrarFallero.php";

        break;
        
        default:
        break;
    }
?>