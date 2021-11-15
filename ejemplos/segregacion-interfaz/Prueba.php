<?php

namespace SegregacionInterfaz;

require_once 'Area.php';

class Prueba
{

    public function __construct()
    {
        echo "Con una sola interfaz con dos métodos poco relacionados entre sí. Baja Cohesión<br>";
        $area_circulo = new Area();
        print_r($area_circulo->areaCirculo(5));
        echo "<br>";
        $area_triangulo = new Area();
        print_r($area_triangulo->areaTriangulo(4, 5));

        echo "<br><br>Segregación de interfaces y responsabilidad única <br>";
        print_r(AreaCirculo::calcular(5));
        echo "<br>";
        print_r(AreaTriangulo::calcular(4, 5));
    }

}
(new Prueba());