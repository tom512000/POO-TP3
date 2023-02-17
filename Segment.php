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
        $this->start = clone $start;
        $this->end = clone $end;
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
    public function getStart() : Point
    {
        return clone $this->start;
    }

    /**
     * Accesseur à l'instance end du Point. Retourne la valeur de l'instance end
     * sous forme de Classe Point.
     *
     * @return Point Instance start du Point
     */
    public function getEnd() : Point
    {
        return clone $this->end ;
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
     * Modificateur à l'instance end du Point. Permet d’affecter une nouvelle instance end au Point.
     *
     * @param Point $end Instance end du Point
     */
    public function setEnd(Point $end) : void
    {
        $this->end = clone $end;
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

    /**
     * Méthode permettant de vérifier si l'instance de la classe Segment qui appelle
     * la méthode est plus grand que l'instance de la classe Segment en paramètre.
     *
     * @param Segment $segment2 (optional) Instance de la classe Segment
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
     * Méthode permettant de vérifier l'égalité entre les instances de la classe Point des
     * instances de la classe Segment qui appelle la méthode et l'instance de la classe
     * Segment en paramètre.
     *
     * @param Segment $segment2 (optional) Instance de la classe Segment
     */
    public function isEqual(Segment $segment2) : bool
    {
        $res = false;
        if ((($this->start == $segment2->start) && ($this->end == $segment2->end)) || (($this->start == $segment2->end) && ($this->end == $segment2->start))) {
            $res = true;
        }
        return $res;
    }

    public function __clone()
    {
        $this->start = clone $this->start;
        $this->end = clone $this->end;
    }
}