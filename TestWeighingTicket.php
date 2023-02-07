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
