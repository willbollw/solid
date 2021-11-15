<?php

namespace Liskov;

class Areas
{
    public function __construct(public float $base, public float $altura, public float $radio)
    {
    }

    public function areaRectangulo(): float
    {
        return $this->base * $this->altura;
    }

    public function areaCirculo(): float
    {
        return $this->radio * $this->radio * 3.14;
    }

}

/**
 *
 */
class AreaTriangulo extends Areas
{
    public function __construct(float $base, float $altura)
    {
        parent::__construct($base, $altura, 0);
    }

    public function areaTriangulo(): float
    {
        return ($this->radio * $this->altura) / 2;
    }
}