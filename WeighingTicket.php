<?php
declare(strict_types = 1);

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

    /**
     * Accesseur au nom de l'article. Retourne la valeur du nom sous forme de chaîne de
     * caractères.
     *
     * @return string Nom de l'article
     */
    public function getArticleName() : string
    {
        return $this->articleName;
    }

    /**
     * Accesseur au prix au kilogramme de l'article. Retourne la valeur du prix
     * sous forme de nombre à virgule.
     *
     * @return float Prix au kilogramme de l'article
     */
    public function getPricePerKilogram() : float
    {
        return $this->pricePerKilogram;
    }

    /**
     * Accesseur au poids de l'article. Retourne la valeur du poids sous forme de nombre entier.
     *
     * @return int Poids de l'article
     */
    public function getWeight() : int
    {
        return $this->weight;
    }

    /**
     * Accesseur au prix total de l'article. Retourne la valeur du poids sous forme de
     * nombre à virgule.
     *
     * @return float Prix total de l'article
     */
    public function getPrice() : float
    {
        return $this->price;
    }

    /**
     * Modificateur au nom de l'article. Permet d’affecter un nouveau nom à l'article.
     *
     * @param string $articleName Nom de l'article
     */
    public function setArticleName(string $articleName) : void
    {
        $this->articleName = $articleName;
    }

    /**
     * Modificateur au prix au kilo de l'article. Permet d’affecter
     * un nouveau prix au kilo à l'article.
     *
     * @param float $pricePerKilogram Prix au kilo de l'article
     */
    public function setPricePerKilogram(float $pricePerKilogram) : void
    {
        $this->pricePerKilogram = $pricePerKilogram;
    }

    /**
     * Modificateur au poids de l'article. Permet d’affecter un nouveau poids à l'article.
     *
     * @param int $weight Poids de l'article
     */
    public function setWeight(int $weight) : void
    {
        $this->weight = $weight;
    }

    /**
     * Affichage des attributs de l'article. Retourne un tableau composé du nom, du prix au
     * kilo, du poids et du prix final de l'article.
     *
     * @return string Attributs d'article
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
     * Méthode permettant de tirer au hasard un nombre entre 0 et 5000 et de l'affecter
     * à l'attribut poids de l'article.
     */
    public function weighing() : void
    {
        $pds = rand(0,5000);
        $this->setWeight($pds);
    }

}