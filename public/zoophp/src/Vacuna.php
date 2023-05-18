<?php

namespace src;

use src\Animal;

class Vacuna {

    public $nombreV;
    public $fecha;
    public $vacineList = [];

    public function __construct($nombreV, $fecha, $vacineList = []) {
        $this->nombreV = $nombreV;
        $this->fecha = $fecha;
        $this->vacineList = $vacineList;
    }

    public function getNombreV() {
        return $this->nombreV;
    }

    public function setNombreV($nombreV) {
        $this->nombreV = $nombreV;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function getVacineList() {
        return $this->vacineList;
    }

    public function addVacine($vacine) {
        $this->vacineList[] = $vacine;
    }

    public function removeVacine($vacine) {
        $index = array_search($vacine, $this->vacineList);
        if ($index !== false) {
            unset($this->vacineList[$index]);
        }
    }

    public function setVacineList($vacineList) {
        $this->vacineList = $vacineList;
    }
}
