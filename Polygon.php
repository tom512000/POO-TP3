<?php
declare(strict_types=1);

class Polygon
{
    private array $vertices;

    /**
     * Constructeur de la classe Polygon. Ce constructeur permet d’affecter un tableau
     * d'instances de la classe Point à l'attribut vertices.
     *
     * @param array $vertices (optional) Tableau d'instances de la classe Point
     */
    public function __construct (array $vertices)
    {
        $this->vertices = $vertices;
    }

    /**
     * Accesseur à l'instance vertices du Polygon. Retourne le nombre de sommets que
     * contient le polygone sous forme de nombre entier.
     *
     * @return int Nombre de sommets du polygone
     */
    public function getVerticesNumber() : int
    {
        return count($this->vertices);
    }

    /**
     * Méthode permettant de vérifier si le nombre de sommets du polygone est nul.
     *
     * @return bool Vrai si pas de sommets, Faux sinon.
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
     * Méthode permettant de donner le périmètre total du polygone.
     *
     */
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