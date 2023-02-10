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
}