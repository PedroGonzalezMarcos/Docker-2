<?php

namespace src;

class APP extends Animal {
    
    public $nivelPeligro;
    public $tipo;
    
    public function __construct($nombre, $especie, $edad, $nivelPeligro, $tipo) {
        parent::__construct($nombre, $especie, $edad);
        $this->nivelPeligro = $nivelPeligro;
        $this->tipo = $tipo;
    }

    public function setNivelPeligro($nivelPeligro) {
        $this->nivelPeligro = $nivelPeligro;
    }

    public function getNivelPeligro() {
        return $this->nivelPeligro;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getTipo() {
        return $this->tipo;
    }
}