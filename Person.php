<?php
declare(strict_types=1);

class Person
{
    private string $lastName;
    private string $firstName;
    private int $age;

    /**
     * Affichage des attributs de la personne.
     *
     */
    public function print() : void
    {
        echo "Nom : {$this->lastName}\n";
        echo "Prenom : {$this->firstName}\n";
        echo "Age : {$this->age}\n" ;
    }

    /**
     * Constructeur de la classe Person. Ce constructeur permet d’affecter un nom, un prénom
     * et un age à une personne. Lorsque ces caractéritiques ne sont pas renseignées lors de
     * l’appel du contructeur, la personne aura pour nom "Doe", prénom "John" et age 0.
     *
     * @param string $lastName (optional) Nom de la personne
     * @param string $firstName (optional) Prénom de la personne
     * @param int $age (optional) Age de la personne
     */
    public function __construct (string $lastName = 'Doe', string $firstName = 'John', int $age = 0)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->age = $age;
    }

    /**
     * Accesseur au nom de la personne. Retourne la valeur du nom sous forme de chaîne de
     * caractères.
     *
     * @return string Nom de la personne
     */
    public function getLastName() : string
    {
        return $this->lastName;
    }

    /**
     * Accesseur au prénom de la personne. Retourne la valeur du prénom sous forme de chaîne de
     * caractères.
     *
     * @return string Prénom de la personne
     */
    public function getFirstName() : string
    {
        return $this->firstName;
    }

    /**
     * Accesseur à l'âge de la personne. Retourne la valeur de l'âge sous forme de chaîne de
     * caractères.
     *
     * @return int Age de la personne
     */
    public function getAge() : int
    {
        return $this->age;
    }

    /**
     * Modificateur à l'âge de la personne. Permet d’affecter un nouvel âge à la personne.
     *
     * @param int $age Age de la personne
     */
    public function setAge(int $age) : void
    {
        $this->age = $age;
    }

    /**
     * Modificateur au prénom de la personne. Permet d’affecter un nouveau prénom à la personne.
     *
     * @param string $firstName Prénom de la personne
     */
    public function setFirstName(string $firstName) : void
    {
        $this->firstName = $firstName;
    }

    /**
     * Modificateur au nom de la personne. Permet d’affecter un nouveau nom à la personne.
     *
     * @param string $lastName Nom de la personne
     */
    public function setLastName(string $lastName) : void
    {
        $this->lastName = $lastName;
    }

    /**
     * Affichage des attributs de la personne. Retourne une chaîne de caractères composée du nom, prénom et âge de
     * la personne.
     *
     * @return string Attributs de personne
     */
    public function __toString() : string
    {
        $res = "Nom : {$this->lastName}\n";
        $res = $res."Prenom : {$this->firstName}\n";
        $res = $res."Age : {$this->age}" ;
        return $res;
    }

}
