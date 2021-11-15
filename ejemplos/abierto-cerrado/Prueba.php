<?php

namespace AbiertoCerrado;

require_once 'Areas.php';

class Prueba
{
    public function __construct()
    {
        echo "Se hace necesario modificar este método en esta capa de abstracción pero también la clase para incluir más figuras <br>";
        echo "Área del cuadrilátero: 45 * 56 <br>";
        print_r((new Areas())('cuadrado', 45, 56));
        echo "<br> Área del triángulo: base 45  y altura 56 <br>";
        print_r((new Areas())('triangulo', 45, 56));
    }

}
(new Prueba());