<?php

namespace src;

use src\Animal;
use src\Vegetacion;
use src\Arbol;
use src\Vacuna;

require_once('Animal.php');
require_once('Vegetacion.php');
require_once('Arbol.php');
require_once('Vacuna.php');

$arbol = new Arbol();

$arbol->setNombreVulgar("Roble");
$arbol->setCuidado("Moderado");
$arbol->setEdad(10);
$arbol->setEspecie("Quercus");

$arbol->setAltura(15);
$arbol->setEspacio("Amplio");
$arbol->setFrutal(false);

$nombreVulgar = $arbol->getNombreVulgar();
$cuidado = $arbol->getCuidado();
$edad = $arbol->getEdad();
$especie = $arbol->getEspecie();

$altura = $arbol->getAltura();
$espacio = $arbol->getEspacio();
$frutal = $arbol->getFrutal();

echo "Nombre Vulgar: " . $nombreVulgar . "\n";
echo "Cuidado: " . $cuidado . "\n";
echo "Edad: " . $edad . "\n";
echo "Especie: " . $especie . "\n";
echo "Altura: " . $altura . "m.\n";
echo "Espacio: " . $espacio . ".\n";
echo "Frutal: " . ($frutal ? "Sí" : "No") . "\n";
echo "the dolphin";

$animal1 = new Animal("Luna", "Perro", 5);
$animal1->setEdad(6);

$arbol2 = new Arbol();
$arbol2->setNombreVulgar("Roble");
$arbol2->setAltura(10);

echo "Nombre del animal: " . $animal1->getNombre() . "\n";
echo "Edad del animal: " . $animal1->getEdad() . " años\n";

echo "Nombre vulgar del árbol que mola: " . $arbol2->getNombreVulgar() . "\n";
echo "Altura del árbol este: " . $arbol2->getAltura() . " metros\n";

$vacuna1 = new Vacuna("Vacuna Alfa", "2022-01-01");
$vacuna2 = new Vacuna("Vacuna Beta", "2022-02-01");

$animal1->addVacine($vacuna1);
$animal1->addVacine($vacuna2);

$vacineList = $animal1->vacineList;

foreach ($vacineList as $vacuna) {
    echo "Nombre de la vacuna: " . $vacuna->nombreV . "\n";
    echo "Fecha de la vacuna: " . $vacuna->fecha . "\n";
    echo "\n";
}
echo"Murcia es África";

?>
