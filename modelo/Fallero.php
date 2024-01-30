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

    // Getters
    function getDni() {
        return $this->dni;
    }
    function getNombre() {
        return $this->nombre;
    }
    function getApellidos() {
        return $this->apellidos;
    }

    function getCuota() {
        return $this->cuota;
    }

    function getIdFalla() {
        return $this->id_falla;
    }

    // Setters
    function setDni($dni) {
        $this->dni = $dni;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    function setCuota($cuota) {
        $this->cuota = $cuota;
    }

    function setIdFalla($id_falla) {
        $this->id_falla = $id_falla;
    }

}

?>