<?php

namespace RespUnica;

/**
 * Aunque se cuenta con una clase con métodos relacionados la responsabilidad única de los principios SOLID establece
 * delegar UNA Única responsabilidad a las clases
 */
class Operaciones
{
    public function suma(int $a, int $b): int
    {
        return $a + $b;
    }

    public function resta(int $a, int $b): int
    {
        return $a - $b;
    }
}

/**
 * Aplicando el principio de responsabilidad única se divide en dos clases, cada una con una sola función
 * */
Class Sumar{
    /**
     * @param int $a
     * @param int $b
     * @return int
     */
    public function __invoke(int $a, int $b): int
    {
        // TODO: Implement __invoke() method.
        return $a + $b;
    }
}

/**
 * Clase para restar dos valores, tiene una sola responsabilidad
 */
Class Restar{
    /**
     * @param int $a
     * @param int $b
     * @return int
     */
    public function __invoke(int $a, int $b): int
    {
        // TODO: Implement __invoke() method.
        return $a - $b;
    }
}