<?php
declare(strict_types = 1);
require_once "WeighingTicket.php";

class WeighingTicket
{
    private string $articleName;
    private float $pricePerKilogram;
    private int $weight;
    private float $price;

    /**
     * Constructeur de la classe WeighingTicket. Ce constructeur permet d’affecter un nom, un prix au kilogramme,
     * un poids et un prix final à un article. Lorsque ces caractéritiques ne sont pas renseignées lors de
     * l’appel du contructeur, l'article aura pour nom "Unknown", prix au kilogramme 0, poids 0 et prix final 0.
     *
     * @param string $articleName (optional) Nom de l'article
     * @param float $pricePerKilogram (optional) Prix au kilogramme de l'article
     * @param int $weight (optional) Poids de l'article
     */
    public function __construct (string $articleName = 'Unknown', float $pricePerKilogram = 0, int $weight = 0)
    {
        $this->articleName = $articleName;
        $this->pricePerKilogram = $pricePerKilogram;
        $this->weight = $weight;
        if (($pricePerKilogram != 0) && ($weight != 0)) {
            $this->price = $pricePerKilogram * ($weight/1000);
        }
        else {
            $this->price = 0;
        }
    }

    /**
     * Affichage des attributs de l'article.
     *
     */
    public function print() : void
    {
        echo "Nom : {$this->articleName}\n";
        echo "Prix au kilogramme : {$this->pricePerKilogram}\n";
        echo "Poids : {$this->weight}\n" ;
        echo "Prix : {$this->price}\n" ;
    }

}