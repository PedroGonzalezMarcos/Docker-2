<?php

namespace src;

class Vegetacion  {

    public $nombreVulgar;
    public $cuidado;
    public $edad;
    public $especie;
    
    function __construct($nombreVulgar, $cuidado, $edad, $especie ) {
        
        $this->nombreVulgar = $nombreVulgar;
        $this->cuidado = $cuidado;
        $this->edad = $edad;
        $this->especie = $especie;
    }

    public function setNombreVulgar($nombreVulgar) {
        $this->nombreVulgar = $nombreVulgar;
    }

    public function getNombreVulgar() {
        return $this->nombreVulgar;
    }

    public function setCuidado($cuidado) {
        $this->cuidado = $cuidado;
    }

    public function getCuidado() {
        return $this->cuidado;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setEspecie($especie) {
        $this->especie = $especie;
    }

    public function getEspecie() {
        return $this->especie;
    }

} 

?>