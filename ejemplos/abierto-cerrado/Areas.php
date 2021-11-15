<?php

namespace AbiertoCerrado;

/**
 * Si se necesita más figuras se debe modificar este método que se encuentra en niveles más profundos violando
 * el principio de abierto para extensión pero cerrado para modificación
 */
class Areas
{
    /**
     * @param string $tipo_figura
     * @param int $base
     * @param int $altura
     * @return float
     */
    public function __invoke(string $tipo_figura, int $base, int $altura): float
    {
        // TODO: Implement __invoke() method.
        $resultado = 0;
        switch ($tipo_figura) {
            case 'cuadrado':
                $resultado = $base * $altura;
                break;
            case 'triangulo':
                $resultado = ($base * $altura)/2;
                break;
        }
        return $resultado;
    }
}

/**
 * Se hace uso de interfaces para respetar principio de Abierto/Cerrado. Sin embargo también sirve para inlustrar el
 * principio de inversión de dependencias donde las clases no deberían depender de concreciones sino de abstracciones
 * y eso se consigue usando interfaces, o clases abstractas.
 */
interface Area{
    public static function calcular(float $base, float $altura): float;
}

/**
 * Permite calcular el área del triángulo
 */
Class Triangulo implements Area{
    public static function calcular(float $base, float $altura): float
    {
        // TODO: Implement calcular() method.
        return ($base * $altura) / 2;
    }
}

/**
 * Permite Calcular área del cuadrado
 */
Class Cuadrado implements Area {
    public static function calcular(float $base, float $altura): float
    {
        // TODO: Implement calcular() method.
        return $base * $altura;
    }
}