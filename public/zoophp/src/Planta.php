<?php

namespace src;

use src\Vegetacion;

class Planta extends Vegetacion {

    public $localizacion;
    public $tierra;
    public $floral;

    public function __construct() {}

    public function getLocalizacion()
    {
        return $this->localizacion;
    }

    public function setLocalizacion($localizacion)
    {
        $this->localizacion = $localizacion;

        return $this;
    }

    public function getTierra()
    {
        return $this->tierra;
    }

    public function setTierra($tierra)
    {
        $this->tierra = $tierra;

        return $this;
    }

    public function getFloral()
    {
        return $this->floral;
    }

    public function setFloral($floral)
    {
        $this->floral = $floral;

        return $this;
    }
}