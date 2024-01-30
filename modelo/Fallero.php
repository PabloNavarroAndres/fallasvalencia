<?php 

class Fallero {

    // Propiedades
    private $dni;
    private $nombre;
    private $apellidos;
    private $cuota;
    private $id_falla;

    function __construct($dni, $nombre, $apellidos, $cuota, $id_falla){
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->cuota = $cuota;
        $this->id_falla = $id_falla;
    }

}

?>