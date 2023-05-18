<?php  

namespace src;

use src\Vacuna;

class Animal {
    public $especie;
    public $nombre;
    public $edad;
    public $vacineList = [];
    
    public function __construct($nombre, $especie, $edad) {
        $this->especie = $especie;
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function setEspecie($especie) {
        $this->especie = $especie;
    }

    public function getEspecie() {
        return $this->especie;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function addVacine(Vacuna $vacuna) {
        $this->vacineList[] = $vacuna;
    }
}