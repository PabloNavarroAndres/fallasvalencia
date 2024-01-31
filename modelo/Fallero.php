<?php 

class Fallero extends Modelo{

    // Propiedades
    private $dni;
    private $nombre;
    private $apellidos;
    private $cuota;
    private $id_falla;

    function __construct($dni){
        $this->dni = $dni;
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

    // Funcion fallero
    function getFallero() {

        // Clase de Modelo donde esta la conexion a la BD
        $modelo = new Modelo();
    
        // Conexion a la BD
        $bd = $modelo->conn;
    
        // SQL para mostrar falleros- > dni, nombre, apellidos, cuota, id_falla
    
        // Query fallero
        $sqlFallero = (
            "SELECT dni, nombre, apellidos, cuota, id_falla
            FROM falleros
            WHERE dni = '$this->dni'"
        );
    
        // Preparamos la consulta
        $sqlFallero = $bd->query($sqlFallero);
    
        // Sacar datos del fallero: dni, nombre, apellidos, cuota, id_falla
        $falleroData = $sqlFallero->fetch();

        // Setters de su info
        $this->setNombre($falleroData['nombre']);
        $this->setApellidos($falleroData['apellidos']);
        $this->setCuota($falleroData['cuota']);
        $this->setIdFalla($falleroData['id_falla']);
        
    }

}

?>