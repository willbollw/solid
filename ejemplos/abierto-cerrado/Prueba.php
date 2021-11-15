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

        echo "<br><br>Se hace uso de interfaces para respetar principio de abierto cerrado. <br>";
        echo "Se hace uso de interfaces para respetar principio de Abierto/Cerrado. Sin embargo también sirve para inlustrar el
  principio de <br>inversión de dependencias donde las clases no deberían depender de concreciones sino de abstracciones
  y eso se consigue usando interfaces, o clases abstractas <br>";
        print_r(Cuadrado::calcular(45, 56));
        echo "<br>";
        print_r(Triangulo::calcular(45, 56));
    }

}
(new Prueba());