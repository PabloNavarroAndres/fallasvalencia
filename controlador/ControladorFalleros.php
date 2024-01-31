<?php 

require "modelo/Modelo.php";
require "modelo/Fallero.php";

class ControladorFalleros {

    /* ************************************************************************************ *
	 * CONSTRUCTOR
	 * ************************************************************************************ */
	function __construct() {}	



	/* *******************************************************************************************
	 * METODOS PUBLICOS
	 * ***************************************************************************************** */	
    public function mostrarFallero() {
        // dni ejemplo: 78901234G //
        $dni = $_POST['dni'];

        $fallero = new Fallero($dni);
    
        // Obtener el fallero de su clase
        $fallero->getFallero();

        // Devolvemos el fallero
        return $fallero;
    }

}

?>