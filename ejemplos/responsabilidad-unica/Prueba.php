<?php

namespace RespUnica;

require_once 'Operaciones.php';

class Prueba
{
    public function __construct()
    {
        echo "Una sola clase con dos responsabilidades para dos operaciones: <br>";
        $operacion = new Operaciones();
        print_r($operacion->suma(4, 6));
        echo '<br>';
        print_r($operacion->resta(6,7));
        echo '<br><br>';
        echo "Clases diferentes para cada operación: <br>";
        print_r((new Sumar())(4, 6));
        echo '<br>';
        print_r((new Restar())(6, 7));
    }
}
(new Prueba());