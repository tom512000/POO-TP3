<?php

declare(strict_types=1);

class Polygon
{
    private array $vertices;

    /**
     * Constructeur de Polygon.
     *
     * @param array $vertices Les sommets du polygone.
     */
    public function __construct (array $vertices)
    {
        $this->vertices = $vertices;
    }

    /**
     *  Accesseur de la classe Polygon.
     *
     * @return int Le nombre de sommets du polygone.
     */
    public function getVerticesNumber() : int
    {
        return count($this->vertices);
    }

    /**
     * Vérifie si le polygone est vide (sans sommets).
     *
     * @return bool Vrai si le polygone est vide, sinon faux.
     */
    public function isEmpty() : bool
    {
        $res = false;
        if ($this->getVerticesNumber() == 0) {
            $res = true;
        }
        return $res;
    }

    /**
     * Calcule le périmètre du polygone.
     *
     * @return int Le périmètre du polygone.
     */
    public function getPerimeter() : int
    {
        $res = 0;
        $array = $this->vertices;
        foreach ($array as $value) {
            $res += round(sqrt((($value->end->getX() - $value->start->getX())**2) + (($value->end->getY() - $value->start->getY())**2)), 2);
        }
        return $res;
    }
}