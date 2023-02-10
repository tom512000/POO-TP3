<?php
declare(strict_types=1);

class Point
{
    private float $x;
    private float $y;

    /**
     * Constructeur de la classe Point. Ce constructeur permet d’affecter une coordonnée
     * x et y à un point. Lorsque ces caractéritiques ne sont pas renseignées lors de
     * l’appel du contructeur, Le point aura pour coordonnée x 0 et y 0.
     *
     * @param float $x (optional) Coordonnée x du point
     * @param float $y (optional) Coordonnée y du point
     */
    public function __construct (float $x = 0, float $y = 0)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * Accesseur à la coordonnée x du point. Retourne la valeur de la coordonnée x sous forme
     * de nombre à virgule.
     *
     * @return float Coordonnée x du point
     */
    public function getX() : float
    {
        return $this->x;
    }

    /**
     * Accesseur à la coordonnée y du point. Retourne la valeur de la coordonnée y sous forme
     * de nombre à virgule.
     *
     * @return float Coordonnée y du point
     */
    public function getY() : float
    {
        return $this->y;
    }

    /**
     * Affichage des attributs du point. Retourne une chaîne de caractères composée
     * de la coordonnée x et la coordonnée y du point.
     *
     * @return string Attributs du point
     */
    public function __toString() : string
    {
        return "( {$this->x} , {$this->y} )";
    }

    /**
     * Méthode permettant de modifier la coordonnée x et y du point.
     *
     * @param float $dx (optional) Coordonnée x du point
     * @param float $dy (optional) Coordonnée y du point
     */
    public function translation(float $dx, float $dy) : void
    {
        $this->x += $dx;
        $this->y += $dy;
    }
}