<?php
declare(strict_types=1);
require_once "Point.php";

class Segment
{
    private Point $start;
    private Point $end;

    /**
     * Constructeur de la classe Segment. Ce constructeur permet d’affecter une instance
     * de la classe Point pour son origine et sa destination.
     *
     * @param Point $start (optional) Point de départ
     * @param Point $end (optional) Point d'arrivée
     */
    public function __construct (Point $start, Point $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    /**
     * Affichage des attributs du point. Retourne une chaîne de caractères composée
     * de la coordonnée x et la coordonnée y du point.
     *
     * @return string Attributs du point
     */
    public function __toString() : string
    {
        return "[ $this->start - $this->end ]\n";
    }

    /**
     * Accesseur à l'instance start du Point. Retourne la valeur de l'instance start
     * sous forme de Classe Point.
     *
     * @return Point Instance start du Point
     */
    public function getStart () : Point
    {
        return clone $this->start ;
    }

    /**
     * Modificateur à l'instance start du Point. Permet d’affecter une nouvelle instance start au Point.
     *
     * @param Point $start Instance start du Point
     */
    public function setStart(Point $start) : void
    {
        $this->start = clone $start;
    }

    /**
     * Méthode permettant de modifier les coordonnées x et y des deux objets de classe Point.
     *
     * @param float $dx (optional) Coordonnée x du point
     * @param float $dy (optional) Coordonnée y du point
     */
    public function translation(float $dx, float $dy) : void
    {
        $this->start -> translation($dx,$dy);
        $this->end -> translation($dx,$dy);
    }

    /**
     * Accesseur à la distance entre les deux objets Point du Segment. Retourne la valeur de cette distance
     * sous forme de nombre réel.
     *
     * @return float Distance entre les deux objets Point
     */
    public function getLength() : float
    {
        return round(sqrt((($this->end -> getX() - $this->start -> getX())**2) + (($this->end -> getY() - $this->start -> getY())**2)), 2);
    }

    public function isLongerThan(Segment $segment2) : bool
    {
        $res = false;
        if ($this->getLength() > $segment->getLength()):

    }
}