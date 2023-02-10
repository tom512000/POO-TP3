<?php
declare(strict_types=1);
require_once "Point.php";
require_once "Segment.php";

# Question 8
$origine = new Point;
$destination = new Point( 0.5 , 6.0 );
# Le défaut de la troisième façon d'appeler ce constructeur est que la coordonnée y est
# automatiquement initialisé à 0 lorsqu'elle n'est pas présente dans le constructeur.
$test = new Point( 11.5);

# Question 9
echo "Attributs de l'objet destination : \n";
echo "x : {$destination->getX()}\n";
echo "y : {$destination->getY()}\n";

# Question 10
echo "$origine\n";

# Question 11
echo $destination."\n";
$destination -> translation(10, 10);
echo $destination."\n";

# Question 13
$segment1 = new Segment( $origine , $destination);

# Question 14
echo "$segment1\n";
