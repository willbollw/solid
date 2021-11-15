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
        }
        return $resultado;
    }
}

interface area{
    public function calcular(float $base, float $altura): float;
}