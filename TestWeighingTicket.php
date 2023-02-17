<?php
declare(strict_types = 1);
require_once "WeighingTicket.php";

# Question 2
$inconnu = new WeighingTicket;
$inconnu -> print();
$carotte = new WeighingTicket("Carotte");
$carotte -> print();
$concombre = new WeighingTicket("Concombre",0.99);
$concombre -> print();
$pommeDT = new WeighingTicket("Pomme de Terre",1.5,3000);
$pommeDT -> print();

# Question 3
# Non car le dernier attribut price est un attribut calculé.
# Il dépend donc du prix au kilogramme et du poids.

# Question 4
echo "Attributs de l'objet pommeDT : \n";
echo "Nom : {$pommeDT->getArticleName()}\n";
echo "Prix au kilo : {$pommeDT->getPricePerKilogram()}\n";
echo "Poids : {$pommeDT->getWeight()}\n";
echo "Prix : {$pommeDT->getPrice()}\n";

# Question 5
# Non, car l'attribut price dépend de 2 autres attributs (poids et prix au kilo).
# price ne peut donc pas être modifié.

# Modification de l'attribut articleName
echo "{$pommeDT->getArticleName()}\n";
$pommeDT->setArticleName('Tomate');
echo "{$pommeDT->getArticleName()}\n";

# Modification de l'attribut pricePerKilogram
echo "{$pommeDT->getPricePerKilogram()}\n";
$pommeDT->setPricePerKilogram(10.38);
echo "{$pommeDT->getPricePerKilogram()}\n";

# Modification de l'attribut weight
echo "{$pommeDT->getWeight()}\n";
$pommeDT->setWeight(200);
echo "{$pommeDT->getWeight()}\n";

# La méthode d'instance qu'il faut définir dans la classe WeighingTicket est __toString.
echo "$inconnu\n";

# Question 6
# La méthode weighing permet de tirer au hasard un nombre entre 0 et 5000, elle affecte
# ce nombre à l'attribut weight de l'objet qui utilise cette méthode.
$inconnu2 = new WeighingTicket;
echo "{$inconnu2->getWeight()}\n";
$inconnu2->weighing();
echo "{$inconnu2->getWeight()}\n";
