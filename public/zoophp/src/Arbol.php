<?php

namespace src;

use src\Vegetacion;

class Arbol extends Vegetacion {

    public $altura;
    public $espacio;
    public $frutal;

    public function __construct() {}

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    public function getEspacio()
    {
        return $this->espacio;
    }

    public function setEspacio($espacio)
    {
        $this->espacio = $espacio;

        return $this;
    }

    public function getFrutal()
    {
        return $this->frutal;
    }

    public function setFrutal($frutal)
    {
        $this->frutal = $frutal;

        return $this;
    }
}