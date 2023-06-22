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
     * @return float Le périmètre du polygone.
     */
    public function getPerimeter() : float
    {
        $perimeter = 0;

        for ($i = 0; $i < count($this->vertices); $i++) {
            $currentVertex = $this->vertices[$i];
            $nextVertex = $this->vertices[($i + 1) % count($this->vertices)];
            $dx = $nextVertex->getX() - $currentVertex->getX();
            $dy = $nextVertex->getY() - $currentVertex->getY();
            $perimeter += sqrt($dx ** 2 + $dy ** 2);
        }
        return $perimeter;
    }
}