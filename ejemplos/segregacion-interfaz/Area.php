<?php

namespace SegregacionInterfaz;

/**
 * Se viola el principio de segregación de interfaces, aunque solo hay dos métodos, en un sistema grande esto puede
 * ocasionar violaciones en responsabilidad única, deterioro en la salud de las clases, baja cohesión.
 */
interface Areas
{
    public function areaCirculo(float $radio): float;

    public function areaTriangulo(float $base, float $altura): float;
}

class Area implements Areas
{
    public function areaCirculo(float $radio): float
    {
        // TODO: Implement areaCirculo() method.
        return $radio * $radio * 3.14;
    }

    public function areaTriangulo(float $base, float $altura): float
    {
        // TODO: Implement areaTriangulo() method.
        return ($base * $altura) / 2;
    }

}

/**
 * Se hace segregación de interfaces y responsabilidad única
 */
interface AreaCirculoI
{
    public static function calcular(float $radio): float;
}

interface AreaTrianguloI
{
    public static function calcular(float $base, float $altura): float;
}

class AreaCirculo implements AreaCirculoI
{
    public static function calcular(float $radio): float
    {
        // TODO: Implement calcular() method.
        return $radio * $radio * 3.14;
    }
}

class AreaTriangulo implements AreaTrianguloI
{
    public static function calcular(float $base, float $altura): float
    {
        // TODO: Implement calcular() method.
        return ($base * $altura) / 2;
    }
}