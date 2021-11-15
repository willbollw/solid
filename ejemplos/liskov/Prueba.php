<?php

namespace Liskov;

require_once 'Areas.php';

class Prueba
{

    public function __construct()
    {
        echo "Violación del principio de Liskov y de responsabilidad única. <br>";
        $circulo = new Areas(5, 6, 3);
        print_r($circulo->areaCirculo());
        echo "<br> <br>El objeto círculo es sutituido por la clase hija AreaTriangulo, sin embargo esta clase no implementa 
        <br> un método para asignar valor a la propiedad radio, forzando a crear un línea más para signar este valor 
        faltante <br>";
        $circulo = new AreaTriangulo(3, 6);
        $circulo->radio = 3;
        print_r($circulo->areaCirculo());
    }

}
(new Prueba());