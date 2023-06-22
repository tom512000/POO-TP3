<?php

declare(strict_types=1);

class Polygon
{
    private array $vertices;

    public function __construct (array $vertices)
    {
        $this->vertices = $vertices;
    }

    public function getVerticesNumber() : int
    {
        return count($this->vertices);
    }

    public function isEmpty() : bool
    {
        $res = false;
        if ($this->getVerticesNumber() == 0) {
            $res = true;
        }
        return $res;
    }

    public function getPerimeter() : int
    {
        $res = 0;
        $array = $this->vertices;
        foreach ($array as $value) {
            $res += round(sqrt((($value->end -> getX() - $value->start -> getX())**2) + (($value->end -> getY() - $value->start -> getY())**2)), 2);
        }
        return $res;
    }
}