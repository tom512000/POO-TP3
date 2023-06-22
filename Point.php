<?php

declare(strict_types=1);

class Point
{
    private float $x;
    private float $y;

    /**
     * Constructeur de la classe Point.
     *
     * @param float $x Coordonnée X du point (par défaut : 0).
     * @param float $y Coordonnée Y du point (par défaut : 0).
     */
    public function __construct (float $x = 0, float $y = 0)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * Accesseur de la classe Point.
     *
     * @return float Coordonnée X du point.
     */
    public function getX() : float
    {
        return $this->x;
    }

    /**
     * Accesseur de la classe Point.
     *
     * @return float Coordonnée Y du point.
     */
    public function getY() : float
    {
        return $this->y;
    }

    /**
     * Obtient une représentation sous forme de chaîne de caractères du point.
     *
     * @return string Représentation du point sous forme de chaîne de caractères.
     */
    public function __toString() : string
    {
        return "( {$this->x} , {$this->y} )";
    }

    /**
     * Effectue une translation du point en ajoutant les déplacements spécifiés.
     *
     * @param float $dx Déplacement en X.
     * @param float $dy Déplacement en Y.
     * @return void
     */
    public function translation(float $dx, float $dy) : void
    {
        $this->x += $dx;
        $this->y += $dy;
    }
}