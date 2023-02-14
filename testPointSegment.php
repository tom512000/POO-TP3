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

# Question 15
echo "$segment1\n";
$pointDebut = $segment1->getStart();
echo "$pointDebut\n";
$pointDebut->translation(2.,3.);
echo "$pointDebut\n";
echo "$segment1\n";
# L'instance start de l'objet segment1 a bien été modifiée.
# Grace à la méthode clone, l'instance de l'objet ne peut pas être modifié.

# Question 16
echo "$segment1\n";
$segment1->setStart($pointDebut);
echo "$segment1\n";

# Question 17
echo $segment1."\n";
$segment1 -> translation(10, 10);
echo $segment1."\n";

# Question 18
echo "{$segment1->getLength()}\n";

# Question 19
