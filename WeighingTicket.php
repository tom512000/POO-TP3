<?php

declare(strict_types = 1);

class WeighingTicket
{
    private string $articleName;
    private float $pricePerKilogram;
    private int $weight;
    private float $price;

    /**
     * Constructeur de WeighingTicket.
     *
     * @param string $articleName Le nom de l'article. Par défaut : 'Inconnu'.
     * @param float $pricePerKilogram Le prix par kilogramme de l'article. Par défaut : 0.
     * @param int $weight Le poids de l'article en grammes. Par défaut : 0.
     */
    public function __construct (string $articleName = 'Unknown', float $pricePerKilogram = 0, int $weight = 0)
    {
        $this->articleName = $articleName;
        $this->pricePerKilogram = $pricePerKilogram;
        $this->weight = $weight;
        if (($pricePerKilogram != 0) && ($weight != 0)) {
            $this->price = $pricePerKilogram * ($weight/1000);
        } else {
            $this->price = 0;
        }
    }

    /**
     * Accesseur de la classe WeighingTicket.
     *
     * @return string Le nom de l'article.
     */
    public function getArticleName() : string
    {
        return $this->articleName;
    }

    /**
     * Modificateur de la classe WeighingTicket.
     *
     * @param string $articleName Le nom de l'article.
     */
    public function setArticleName(string $articleName) : void
    {
        $this->articleName = $articleName;
    }

    /**
     * Accesseur de la classe WeighingTicket.
     *
     * @return float Le prix par kilogramme de l'article.
     */
    public function getPricePerKilogram() : float
    {
        return $this->pricePerKilogram;
    }

    /**
     * Modificateur de la classe WeighingTicket.
     *
     * @param float $pricePerKilogram Le prix par kilogramme de l'article.
     */
    public function setPricePerKilogram(float $pricePerKilogram) : void
    {
        $this->pricePerKilogram = $pricePerKilogram;
    }

    /**
     * Accesseur de la classe WeighingTicket.
     *
     * @return int Le poids de l'article en grammes.
     */
    public function getWeight() : int
    {
        return $this->weight;
    }

    /**
     * Modificateur de la classe WeighingTicket.
     *
     * @param int $weight Le poids de l'article en grammes.
     */
    public function setWeight(int $weight) : void
    {
        $this->weight = $weight;
    }

    /**
     * Accesseur de la classe WeighingTicket.
     *
     * @return float Le prix total de l'article.
     */
    public function getPrice() : float
    {
        return $this->price;
    }

    /**
     * Affiche les détails de l'article.
     */
    public function print() : void
    {
        echo "Nom : {$this->articleName}\n";
        echo "Prix au kilogramme : {$this->pricePerKilogram}\n";
        echo "Poids : {$this->weight}\n" ;
        echo "Prix : {$this->price}\n" ;
    }

    /**
     * Retourne une représentation textuelle de l'article.
     *
     * @return string La représentation textuelle de l'article.
     */
    public function __toString() : string
    {
        $res = "********************\n";
        $res = $res."*  Article      : {$this->articleName}\n";
        $res = $res."*  Prix au kilo : {$this->pricePerKilogram}\n";
        $res = $res."*  Poids (gr)   : {$this->weight}\n";
        $res = $res."*\n" ;
        $res = $res."*  Prix         : {$this->price}\n";
        $res = $res."********************\n";
        return $res;
    }

    /**
     * Effectue une pesée aléatoire pour définir le poids de l'article.
     */
    public function weighing() : void
    {
        $pds = rand(0,5000);
        $this->setWeight($pds);
    }
}