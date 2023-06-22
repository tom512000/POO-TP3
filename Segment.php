<?php

declare(strict_types=1);

require_once "Point.php";

class Segment
{
    private Point $start;
    private Point $end;

    /**
     * Constructeur de Segment.
     *
     * @param Point $start Le point de départ du segment.
     * @param Point $end Le point d'arrivée du segment.
     */
    public function __construct (Point $start, Point $end)
    {
        $this->start = clone $start;
        $this->end = clone $end;
    }

    /**
     * Accesseur de la classe Segment.
     *
     * @return Point Le point de départ du segment.
     */
    public function getStart() : Point
    {
        return clone $this->start;
    }

    /**
     * Modificateur de la classe Segment.
     *
     * @param Point $start Le point de départ du segment.
     */
    public function setStart(Point $start) : void
    {
        $this->start = clone $start;
    }

    /**
     * Accesseur de la classe Segment.
     *
     * @return Point Le point d'arrivée du segment.
     */
    public function getEnd() : Point
    {
        return clone $this->end ;
    }

    /**
     * Modificateur de la classe Segment.
     *
     * @param Point $end Le point d'arrivée du segment.
     */
    public function setEnd(Point $end) : void
    {
        $this->end = clone $end;
    }

    /**
     * Effectue une translation du segment en déplaçant ses points de départ et d'arrivée.
     *
     * @param float $dx La distance de translation en abscisse.
     * @param float $dy La distance de translation en ordonnée.
     */
    public function translation(float $dx, float $dy) : void
    {
        $this->start->translation($dx,$dy);
        $this->end->translation($dx,$dy);
    }

    /**
     * Calcule la longueur du segment.
     *
     * @return float La longueur du segment.
     */
    public function getLength() : float
    {
        return round(sqrt((($this->end->getX() - $this->start->getX())**2) + (($this->end -> getY() - $this->start -> getY())**2)), 2);
    }

    /**
     * Vérifie si le segment est plus long que le segment donné.
     *
     * @param Segment $segment2 Le segment à comparer.
     * @return bool Vrai si le segment est plus long, sinon faux.
     */
    public function isLongerThan(Segment $segment2) : bool
    {
        $res = false;
        if ($this->getLength() > $segment2->getLength()) {
            $res = true;
        }
        return $res;
    }

    /**
     * Vérifie si le segment est égal au segment donné.
     *
     * @param Segment $segment2 Le segment à comparer.
     * @return bool Vrai si les segments sont égaux, sinon faux.
     */
    public function isEqual(Segment $segment2) : bool
    {
        $res = false;
        if ((($this->start == $segment2->start) && ($this->end == $segment2->end)) || (($this->start == $segment2->end) && ($this->end == $segment2->start))) {
            $res = true;
        }
        return $res;
    }

    /**
     * Méthode de clonage du segment.
     */
    public function __clone()
    {
        $this->start = clone $this->start;
        $this->end = clone $this->end;
    }

    /**
     * Retourne une représentation textuelle du segment.
     *
     * @return string La représentation textuelle du segment.
     */
    public function __toString() : string
    {
        return "[ $this->start - $this->end ]\n";
    }
}