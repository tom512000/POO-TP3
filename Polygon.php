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

    /**
     * Insère un nouveau point dans le tableau vertices à la position indice.
     *
     * @param Point $newPoint Le nouveau point à insérer.
     * @param int $index L'indice où insérer le point.
     * @return bool Vrai si l'insertion a réussi, sinon faux.
     */
    public function insertPoint(Point $newPoint, int $index) : bool
    {
        $res = false;

        if ($index >= 0 && $index <= count($this->vertices)) {
            for ($i = count($this->vertices)-1; $i >= $index; $i--) {
                $this->vertices[$i+1] = $this->vertices[$i];
            }

            $this->vertices[$index] = $newPoint;
            $res = true;
        }

        return $res;
    }

    /**
     * Retourne une représentation sous forme de chaîne de caractères du polygone.
     *
     * @return string La représentation du polygone.
     */
    public function __toString() : string
    {
        $res = "Polygon:\n";
        $index = 1;

        foreach ($this->vertices as $point) {
            $res .= "  Point n°$index : $point\n";
            $index++;
        }

        return $res;
    }

    /**
     * Vérifie si deux polygones sont égaux.
     *
     * @param Polygon $polygon Le polygone à comparer.
     * @return bool Vrai si les polygones sont égaux, sinon faux.
     */
    public function isEqual(Polygon $polygon) : bool
    {
        $res = true;
        $vertices1 = $this->vertices;
        $vertices2 = $polygon->vertices;
    
        if (count($vertices1) !== count($vertices2)) {
            $res = false;
        } else {
            $startIndex = array_search($vertices2[0], $vertices1);
    
            if ($startIndex === false) {
                $res = false;
            } else {
                $n = count($vertices1);
                for ($i = 0; $i < $n; $i++) {
                    $index1 = ($startIndex + $i) % $n;
                    $index2 = $i;
    
                    if ($vertices1[$index1] != $vertices2[$index2]) {
                        $res = false;
                        break;
                    }
                }
            }
        }
    
        return $res;
    }
}